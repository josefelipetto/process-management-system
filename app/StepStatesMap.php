<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StepStatesMap extends Model
{
    protected $table = 'steps_states_map';

    protected $fillable = [
        'step_id',
        'state_id',
        'type'
    ];

    public function stateInformation()
    {
        return $this->belongsTo(StatesMap::class, 'state_id');
    }

    public function stepInformation()
    {
        return $this->belongsTo(Step::class, 'step_id');
    }
}
