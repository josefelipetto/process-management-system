<?php


namespace App\Services;


use App\Item;
use App\PreviousSteps;
use App\Repositories\StepRepository;
use App\State;
use App\Step;
use App\StepsMap;
use Illuminate\Database\Eloquent\Model;

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
     * @return \App\Step[]|\Illuminate\Database\Eloquent\Collection
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

        foreach ($step->stepInformation->mappedStates as $mappedState) {
            State::create([
                'step_id' => $step->id,
                'state_map_id' => $mappedState->state->id
            ]);
        }
        return $step;
    }

    /**
     * @param Model $resource
     * @param array $data
     * @return bool
     */
    public function update(Model $resource, array $data)
    {
        return $this->stepRepository->update($resource, $data);
    }

    /**
     * @param Model $model
     * @return bool|null
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
