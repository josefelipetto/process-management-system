<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class State
 * @package App
 */
class State extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'step_id',
        'state_map_id',
        'value'
    ];

    /**
     * @return BelongsTo
     */
    public function step(): BelongsTo
    {
        return $this->belongsTo(Step::class, 'step_id');
    }

    /**
     * @return BelongsTo
     */
    public function stateInformation(): BelongsTo
    {
        return $this->belongsTo(StatesMap::class, 'state_map_id');
    }

    /**
     * @param $step_map_id
     * @return mixed
     */
    public function stateStepInformation($step_map_id)
    {
        return StepStatesMap::where([
            'step_id' => $step_map_id,
            'state_id' => $this->state_map_id
        ]);
    }

    /**
     * @return HasMany
     */
    public function files(): HasMany
    {
        return $this->hasMany(File::class, 'state_id');
    }

}
