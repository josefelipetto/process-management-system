<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatesMap extends Model
{
    public const FILE = 'F';
    public const TEXT = 'T';
    public const DATE = 'D';

    protected $fillable = [
        'name',
        'type',
        'is_mandatory'
    ];
}
