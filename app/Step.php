<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Step
 * @package App
 */
class Step extends Model
{
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
        $previousSteps = $this->previous()->get();

        return $previousSteps->filter(static function (PreviousSteps $previousSteps) {
            return !$previousSteps->previousStep->status;
        })->count() > 0;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stepInformation()
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
}
