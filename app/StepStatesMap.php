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

    public function state()
    {
        return $this->belongsTo(StatesMap::class, 'state_id');
    }
}
