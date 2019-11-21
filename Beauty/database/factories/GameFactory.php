<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'name'=> 'Juego'.rand(1,1000),
    ];
});
