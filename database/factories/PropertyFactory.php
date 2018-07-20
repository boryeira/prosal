<?php

use Faker\Generator as Faker;
use App\Property;

$factory->define(App\Property::class, function (Faker $faker) {
    return [
      'folio' => $faker->unique()->numberBetween($min = 1000, $max = 9000),
      'address' => $faker->streetAddress,
      'comuna_id' => $faker->numberBetween($min = 1101, $max = 15202)
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
