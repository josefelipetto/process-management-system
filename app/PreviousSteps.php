<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class PreviousSteps
 * @package App
 */
class PreviousSteps extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'step_id',
        'previous_step_id'
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
    public function previousStep(): BelongsTo
    {
        return $this->belongsTo(Step::class, 'previous_step_id');
    }
}
