<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Step
 * @package App
 */
class Step extends Model
{

    use SoftDeletes;

    /**
     * @var string[]
     */
    protected $fillable = [
        'item_id',
        'step_map_id',
        'approver',
        'status'
    ];

    /**
     *
     */
    public const UNCHECKED = 0;
    /**
     *
     */
    public const APPROVED = 1;
    /**
     *
     */
    public const DENIED = 2;


    /**
     * @return HasMany
     */
    public function previous(): HasMany
    {
        return $this->hasMany(PreviousSteps::class, 'step_id');
    }

    /**
     * @return bool
     */
    public function isLocked(): bool
    {
        $phase = $this->stepInformation->phase ?? '';

        $phaseDecisionPoint = $this->findPhaseDecisionPoint($phase);
        $phaseUpdatesAndCorrections = $this->findPhaseUpdatesAndCorrections($phase);

        if ($phaseDecisionPoint !== null
            && $phaseDecisionPoint->getAttribute('status') === Step::DENIED
            && $phaseUpdatesAndCorrections !== null
            && $this->stepInformation->id !== $phaseUpdatesAndCorrections->stepInformation->id
            && $phaseUpdatesAndCorrections->status !== Step::APPROVED) {
            return true;
        }

        $previousSteps = $this->previous()->get();

        if (
            $this->stepInformation->id === StepsMap::ATUALIZACOES_E_CORRECOES_ECR
            || $this->stepInformation->id === StepsMap::ATUALIZACOES_E_CORRECOES_EDR
            || $this->stepInformation->id === StepsMap::ATUALIZACOES_E_CORRECOES_QER
        ) {
            $previousStep = $previousSteps->first()->previousStep;
            return $previousStep->status < self::DENIED;
        }

        return $previousSteps->filter(static function (PreviousSteps $previousSteps) {
            return $previousSteps->previousStep->status === self::UNCHECKED
                || $previousSteps->previousStep->status === self::DENIED;
        })->count() > 0;
    }

    /**
     * @return BelongsTo
     */
    public function stepInformation(): BelongsTo
    {
        return $this->belongsTo(StepsMap::class, 'step_map_id');
    }

    /**
     * @return HasMany
     */
    public function states(): HasMany
    {
        return $this->hasMany(State::class, 'step_id');
    }

    /**
     * @return HasMany
     */
    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class, 'step_id');
    }

    /**
     * @return BelongsTo
     */
    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'item_id');
    }

    /**
     * @param string $phase
     * @return Step|null
     */
    private function findPhaseDecisionPoint(string $phase): ?Step
    {
        switch ($phase) {
            case 'ECR':
                return Step::where('step_map_id', StepsMap::RESULTADOS_ACEITAVEIS_ECR)->first();
            case 'EDR':
                return Step::where('step_map_id', StepsMap::RESULTADOS_ACEITAVEIS_EDR)->first();
            case 'QER':
                return Step::where('step_map_id', StepsMap::RESULTADOS_ACEITAVEIS_QER)->first();
            default:
                return null;
        }
    }

    /**
     * @param string $phase
     * @return Step|null
     */
    private function findPhaseUpdatesAndCorrections(string $phase): ?Step
    {
        switch ($phase) {
            case 'ECR':
                return Step::where('step_map_id', StepsMap::ATUALIZACOES_E_CORRECOES_ECR)->first();
            case 'EDR':
                return Step::where('step_map_id', StepsMap::ATUALIZACOES_E_CORRECOES_EDR)->first();
            case 'QER':
                return Step::where('step_map_id', StepsMap::ATUALIZACOES_E_CORRECOES_QER)->first();
            default:
                return null;
        }
    }
}
