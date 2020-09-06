<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StepsMap extends Model
{
    protected $fillable = [
        'name',
        'ui_id',
        'type'
    ];
}
