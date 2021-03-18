<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Http\Models\Couverture;

$factory->define(Couverture::class, function (Faker $faker) {
    return [
        'image' => $faker->sentence(3),
        'animation' => $faker->sentence(3),
        'description' => $faker->sentence(5),
        'titre' => $faker->sentence(2),
        'redirection' => $faker->sentence(2)
    ];
});
