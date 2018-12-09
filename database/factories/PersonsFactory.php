<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Persons\Persons::class, function (Faker $faker) {
    return [
      'nombre' => $faker->name,
      'email' => $faker->unique()->safeEmail,
    ];
});
