<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //'user_id' => factory(\App\User::class),
        'title'  => $faker->sentence(),
        'description'  => $faker->paragraph(),
        'price'  => $faker-> randomFloat(),
        'label'  => 'новинка',
        'image'  => 'public\img\products\img-1.jpg',
        'image_name' => 'img-1.jpg',
    ];
});
