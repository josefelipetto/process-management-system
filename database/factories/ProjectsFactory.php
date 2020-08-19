<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Projects;
use Faker\Generator as Faker;

$factory->define(Projects::class, function (Faker $faker) {

    $code = implode('', $faker->randomElements(range('A', 'Z'), 3))
    . '_' . implode('', $faker->randomElements(range(1, 100)));

    return array(
        'name' => $faker->company,
        'code' => $code,
        'user_id' => 1,
    );
});
