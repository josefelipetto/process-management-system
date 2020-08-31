<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Status
 * @package App
 */
class Status extends Model
{
    /**
     * @var string
     */
    protected $table = 'statuses';

    /**
     * @var string[]
     */
    protected $fillable = [
        'name'
    ];
}
