<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\ImageDetail::class, function (Faker $faker) {
    return [
        'image_url' => $faker->imageUrl(300, 400),
        'product_id' => random_int(1,20),
    ];
});
