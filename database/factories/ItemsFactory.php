<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use App\Project;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    $code = implode('', $faker->randomElements(range('A', 'Z'), 3))
        . '_' . implode('', $faker->randomElements(range(1, 100)));

    return [
        'code' => $code,
        'description' => $faker->text(),
        'status_id' => 1,
        'project_id' => Project::first()
    ];
});
