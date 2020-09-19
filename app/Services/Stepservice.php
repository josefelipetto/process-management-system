<?php

namespace App\Services;

use App\Activity;
use App\File;
use App\Item;
use App\PreviousSteps;
use App\Repositories\StepRepository;
use App\State;
use App\StatesMap;
use App\Step;
use App\StepsMap;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\FileBag;

/**
 * Class Stepservice
 * @package App\Services
 */
class Stepservice implements ServiceInterface
{

    /**
     * @var StepRepository
     */
    private StepRepository $stepRepository;

    /**
     * Stepservice constructor.
     * @param StepRepository $stepRepository
     */
    public function __construct(StepRepository $stepRepository)
    {
        $this->stepRepository = $stepRepository;
    }

    /**
     * @return Step[]|Collection
     */
    public function all()
    {
        return $this->stepRepository->all();
    }

    /**
     * @param array $data
     * @return Step
     */
    public function create(array $data): Step
    {
        $step = $this->stepRepository->create($data);

        if (array_key_exists($step->stepInformation->id, Activity::$stepActivitiesMap)) {
            foreach (Activity::$stepActivitiesMap[$step->stepInformation->id] as $activity) {
                Activity::create([
                    'description' => $activity,
                    'checked' => false,
                    'step_id' => $step->id
                ]);
            }
        }


        foreach ($step->stepInformation->mappedStates as $mappedState) {
            State::create([
                'step_id' => $step->id,
                'state_map_id' => $mappedState->state_id
            ]);
        }
        return $step;
    }

    /**
     * @param Step $resource
     * @param Request $data
     * @return bool
     */
    public function update(Model $resource, $data): bool
    {
        if ($resource->isLocked()) {
            return false;
        }

        $this->uploadFiles($data->files, $resource);

        // handle other kinds of inputs
        foreach ($data->all() as $state_id => $input) {
            if (!is_numeric($state_id)) {
                continue;
            }

            $state = State::find($state_id);

            if ($state === null) {
                continue;
            }

            $state->update([
                'value' => $input
            ]);

            // now propagate
            // @todo: Refactor to DRY with files propagation
            // take item's steps.
            $itemSteps = $resource->item->steps;

            /* @var Step $itemStep */
            foreach ($itemSteps as $itemStep) {
                if ($itemStep->id === $resource->id) {
                    continue;
                }

                $stateToUpdate = $itemStep->states()->where('state_map_id', $state->state_map_id)->first();

                if ($stateToUpdate === null) {
                    continue;
                }

                $stateToUpdateInformation = $stateToUpdate
                    ->stateStepInformation($stateToUpdate->step->step_map_id)
                    ->first();

                if ($stateToUpdateInformation === null) {
                    continue;
                }

                if ($stateToUpdate->stateInformation->should_propagate
                    && $stateToUpdateInformation->type === StatesMap::INPUT) {
                    $stateToUpdate->update([
                        'value' => $input
                    ]);
                }


            }
        }

        $this->handleActivities($data->all());

        if ($data->has('status')) {
            if ($this->isADecisionPoint($resource) && (int)$data->get('status') === Step::DENIED) {
                /* @var Collection $steps */
                $steps = $resource->item->steps;
                $this->deny($steps, $resource);
            }

            return $this->stepRepository->update($resource, [
                'status' => $data->get('status'),
                'approver' => $data->get('approver')
            ]);
        }

        return true;
    }

    /**
     * @param Step $step
     * @return bool
     */
    private function isADecisionPoint(Step $step): bool
    {
        return $step->stepInformation->id === StepsMap::RESULTADOS_ACEITAVEIS_QER
        || $step->stepInformation->id === StepsMap::RESULTADOS_ACEITAVEIS_ECR
        || $step->stepInformation->id === StepsMap::RESULTADOS_ACEITAVEIS_EDR;
    }

    /**
     * @param Collection $steps
     * @param Step $resource
     */
    private function deny(Collection $steps, Step $resource): void
    {
        $this->getPhaseSteps($steps, $resource)->each(static function (Step $step) {
            $step->update([
                'status' => Step::DENIED
            ]);
        });
    }

    /**
     * @param Collection $steps
     * @param Step $resource
     * @return Collection
     */
    private function getPhaseSteps(Collection $steps, Step $resource): Collection
    {
        return $steps->filter(static function (Step $step) use ($resource) {
            $isVendorQualification = $step->stepInformation->phase === 'QER' &&
                $step->stepInformation->id === StepsMap::QUALIFICACAO_DO_FORNECEDOR;

            return !$isVendorQualification && $step->stepInformation->phase === $resource->stepInformation->phase;
        });
    }

    /**
     * @param FileBag $files
     * @param Step $step
     */
    private function uploadFiles(FileBag $files, Step $step): void
    {
        /* @var UploadedFile $file */
        foreach ($files as $stateKey => $file) {
            $state = State::find($stateKey);

            $path = File::all()->count() . '_' . $file->getClientOriginalName();
            //$file->move(storage_path('app/public'), $path);
            Storage::disk('public')->put($path, file_get_contents($file->getRealPath()));

            File::create([
                'state_id' => $state->id,
                'path' => $path
            ]);

            // take item's steps.
            $itemSteps = $step->item->steps;

            /* @var Step $itemStep */
            foreach ($itemSteps as $itemStep) {
                if ($itemStep->id === $step->id) {
                    continue;
                }

                $stateToUpdate = $itemStep->states()->where('state_map_id', $state->state_map_id)->first();

                if ($stateToUpdate === null) {
                    continue;
                }

                $stateToUpdateInformation = $stateToUpdate
                    ->stateStepInformation($stateToUpdate->step->step_map_id)
                    ->first();

                if ($stateToUpdateInformation === null) {
                    continue;
                }

                if ($stateToUpdate->stateInformation->should_propagate &&
                    $stateToUpdateInformation->type === StatesMap::INPUT) {
                    File::create([
                        'state_id' => $stateToUpdate->id,
                        'path' => $path
                    ]);
                }
            }
        }
    }

    /**
     * @param array $data
     */
    private function handleActivities(array $data): void
    {
        foreach ($data as $key => $value) {
            if ($value === 'on' && stripos($key, 'activity_') !== false) {
                $activityId = explode('_', $key);
                Activity::find($activityId[1])->update([
                    'checked' => true
                ]);
            }
        }
    }

    /**
     * @param Model $model
     * @return bool|null
     * @throws \Exception
     */
    public function delete(Model $model)
    {
        return $this->stepRepository->delete($model);
    }

    /**
     * Build workflow Structure
     * @param Item $item
     */
    public function setupWorkflow(Item $item)
    {
        foreach ($item->steps()->get() as $step) {
            switch ($step->step_map_id) {
                case StepsMap::ANALISE_DO_FORNECEDOR:
                case StepsMap::PLANO_DE_CONTROLE_DE_PROTOTIPO:
                    PreviousSteps::create([
                        'step_id' => $step->id,
                        'previous_step_id' => $item->step(StepsMap::ESPECIFICACOES_PRELIMINARES)->id
                    ]);
                    break;
                case StepsMap::SOLICITACAO_DO_LOTE_1:
                    PreviousSteps::create([
                        'step_id' => $step->id,
                        'previous_step_id' => $item->step(StepsMap::PLANO_DE_CONTROLE_DE_PROTOTIPO)->id
                    ]);
                    break;
                case StepsMap::LOTE_1:
                    PreviousSteps::create([
                        'step_id' => $step->id,
                        'previous_step_id' => $item->step(StepsMap::SOLICITACAO_DO_LOTE_1)->id
                    ]);
                    break;
                case StepsMap::RESULTADOS_ACEITAVEIS_ECR:
                    PreviousSteps::create([
                        'step_id' => $step->id,
                        'previous_step_id' => $item->step(StepsMap::LOTE_1)->id
                    ]);
                    PreviousSteps::create([
                        'step_id' => $step->id,
                        'previous_step_id' => $item->step(StepsMap::ANALISE_DO_FORNECEDOR)->id
                    ]);
                    break;
                case StepsMap::PLANO_DE_CONTROLE_DE_QUALIDADE:
                case StepsMap::ATUALIZACOES_E_CORRECOES_ECR:
                case StepsMap::DESENVOLVIMENTO_DA_FERRAMENTA:
                    PreviousSteps::create([
                        'step_id' => $step->id,
                        'previous_step_id' => $item->step(StepsMap::RESULTADOS_ACEITAVEIS_ECR)->id
                    ]);
                    break;
                case StepsMap::SOLICITACAO_DO_LOTE_2:
                    PreviousSteps::create([
                        'step_id' => $step->id,
                        'previous_step_id' => $item->step(StepsMap::DESENVOLVIMENTO_DA_FERRAMENTA)->id
                    ]);
                    PreviousSteps::create([
                        'step_id' => $step->id,
                        'previous_step_id' => $item->step(StepsMap::PLANO_DE_CONTROLE_DE_QUALIDADE)->id
                    ]);
                    break;
                case StepsMap::ACOES_DE_VERIFICACAO:
                case StepsMap::LOTE_2:
                    PreviousSteps::create([
                        'step_id' => $step->id,
                        'previous_step_id' => $item->step(StepsMap::SOLICITACAO_DO_LOTE_2)->id
                    ]);
                    break;
                case StepsMap::RESULTADOS_ACEITAVEIS_EDR:
                    PreviousSteps::create([
                        'step_id' => $step->id,
                        'previous_step_id' => $item->step(StepsMap::LOTE_2)->id
                    ]);
                    PreviousSteps::create([
                        'step_id' => $step->id,
                        'previous_step_id' => $item->step(StepsMap::ACOES_DE_VERIFICACAO)->id
                    ]);
                    break;
                case StepsMap::ATUALIZACOES_E_CORRECOES_EDR:
                case StepsMap::QUALIFICACAO_DO_FORNECEDOR:
                    PreviousSteps::create([
                        'step_id' => $step->id,
                        'previous_step_id' => $item->step(StepsMap::RESULTADOS_ACEITAVEIS_EDR)->id
                    ]);
                    break;
                case StepsMap::PLANO_DE_CONTROLE_DE_MANUFATURA:
                case StepsMap::SOLICITACAO_DO_LOTE_3:
                    PreviousSteps::create([
                        'step_id' => $step->id,
                        'previous_step_id' => $item->step(StepsMap::QUALIFICACAO_DO_FORNECEDOR)->id
                    ]);
                    break;
                case StepsMap::LOTE_3:
                    PreviousSteps::create([
                        'step_id' => $step->id,
                        'previous_step_id' => $item->step(StepsMap::SOLICITACAO_DO_LOTE_3)->id
                    ]);
                    break;
                case StepsMap::ACOES_DE_VALIDACAO:
                    PreviousSteps::create([
                        'step_id' => $step->id,
                        'previous_step_id' => $item->step(StepsMap::PLANO_DE_CONTROLE_DE_MANUFATURA)->id
                    ]);
                    PreviousSteps::create([
                        'step_id' => $step->id,
                        'previous_step_id' => $item->step(StepsMap::SOLICITACAO_DO_LOTE_3)->id
                    ]);
                    break;
                case StepsMap::RESULTADOS_ACEITAVEIS_QER:
                    PreviousSteps::create([
                        'step_id' => $step->id,
                        'previous_step_id' => $item->step(StepsMap::LOTE_3)->id
                    ]);
                    PreviousSteps::create([
                        'step_id' => $step->id,
                        'previous_step_id' => $item->step(StepsMap::ACOES_DE_VALIDACAO)->id
                    ]);
                    break;
                case StepsMap::ATUALIZACOES_E_CORRECOES_QER:
                case StepsMap::ITEM_LIBERADO_PARA_PRODUCAO:
                    PreviousSteps::create([
                        'step_id' => $step->id,
                        'previous_step_id' => $item->step(StepsMap::RESULTADOS_ACEITAVEIS_QER)->id
                    ]);
                    break;
                default:
                    break;
            }
        }
    }
}
