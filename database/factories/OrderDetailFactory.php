<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OrderDetail;
use Faker\Generator as Faker;

$factory->define(OrderDetail::class, function (Faker $faker) {
    return [
        'order_id' => rand(1, 10),
        'product_id' => rand(1, 12),
        'quantity' => rand(1, 5),
        'price' => $faker->numberBetween(1000000, 999000),
    ];
});
