<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Persons\Administrator::class, function (Faker $faker) {
    return [
        'cargo' => $faker->title
    ];
});
