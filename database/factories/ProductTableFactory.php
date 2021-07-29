<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;


$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'product_name' => $faker->sentence(2),
        'description' => $faker->paragraph(3),
        'price' => $faker->numberBetween(100, 1000),
    ];
});
