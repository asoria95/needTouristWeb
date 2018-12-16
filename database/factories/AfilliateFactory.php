<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Persons\Afilliate::class, function (Faker $faker) {
    return [
      'direccion' => $faker->Address,
      'edad' => rand(18, 65),
      'curriculum' => 'curriculum/flZGiz6JCfD5me1OBllPs21r9ZEWuEqNIchE5XvL.pdf'
    ];
});
