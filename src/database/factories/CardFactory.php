<?php

use Faker\Generator as Faker;

$factory->define(App\Card::class, function (Faker $faker) {
    return [
        'front_title' => $faker->unique()->word,
        'front_subtitle' => $faker->unique()->sentence,
        'back_title' => $faker->word,
        'back_subtitle' => $faker->sentence,
    ];
});
