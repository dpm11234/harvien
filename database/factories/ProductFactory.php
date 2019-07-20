<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    $id = $faker->unique()->buildingNumber;
    factory(App\ImageDetail::class, 4)->create(['product_id' => $id]);
    return [
        'id'            => $id,
        'name'          => $faker->unique()->text(15),
        'intro'         => $faker->text(30),
        'user_id'       => $faker->randomNumber(5),
        'slug'          => $faker->text(20),
        'discount'      => $faker->numberBetween(0, 50),
        // 'description'   => $faker->text(100),
        'review'        => $faker->sentence(10),
        'tag'           => $faker->text(15),
        'thumbnail'         => $faker->imageUrl(300,300),
        'price'         => $faker->numberBetween(100000, 5000000),
        'status'        => $faker->numberBetween(0,1),
    ];
});
