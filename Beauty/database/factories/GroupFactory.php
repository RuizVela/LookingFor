<?php

use App\Game;
use App\Club;
use App\Group;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
    return [
        'name'=> 'Equipo'.rand(1,1000),
        'description'=> $faker->text(100),
        'game_id'=>Game::all()->random()->id,
        'club_id'=>Club::all()->random()->id
    ];
});
