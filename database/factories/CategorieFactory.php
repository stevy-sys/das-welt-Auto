<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Http\Models\Categorie;

$factory->define(Categorie::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2)
    ];
});
