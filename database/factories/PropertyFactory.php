<?php

use Faker\Generator as Faker;
use App\Property;
use App\Comuna;

$factory->define(App\Property::class, function (Faker $faker) {
    return [
      'folio' => $faker->unique()->numberBetween($min = 1000, $max = 9000),
      'address' => $faker->streetAddress,
      'comuna_id' => App\Comuna::inRandomOrder()->first()->id,
      'tipo' => $faker->randomElement($array = array ('casa','departamento','oficina','terreno'))
    ];
});

$factory->define(App\PropertyImage::class, function (Faker $faker) {
    return [
      'property_id' => App\Property::inRandomOrder()->first()->id,
      'link' => $faker->randomElement($array = array ('1.jpg','2.jpg'))
    ];
});

$factory->define(App\PropertyDoc::class, function (Faker $faker) {
    return [
      'property_id' => App\Property::inRandomOrder()->first()->id,
      'link' => $faker->randomElement($array = array ('1.pdf','2.xls'))
    ];
});
