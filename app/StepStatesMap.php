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
}
