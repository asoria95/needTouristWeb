<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Persons\Turist::class, function (Faker $faker) {
    return [
      'idioma' => $faker->title,
      'residencia' => $faker->address
    ];
});
