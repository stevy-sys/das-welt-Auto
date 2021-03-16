<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Http\Models\Voiture;
use Faker\Generator as Faker;

$factory->define(Voiture::class, function (Faker $faker) {
    return [
        'categorie_id' => rand(1,5),
        'nom' => $faker->sentence(2),
        'type' => $faker->sentence(3),
        'vitesse' => rand(0,400),
        'place' => rand(0,50),
        'image' => $faker->sentence(2),
        'annee' => rand(1900,2022),
        'moteur' => $faker->sentence(2),
        'description' => $faker->sentence(50)
    ];
});
