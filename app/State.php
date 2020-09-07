<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

}
