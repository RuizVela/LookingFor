<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use App\Group;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
    return [
        'name'=> $faker->text(20),
        'description'=> $faker->text(100),
        'game_id'=>Game::all()->random()->id,
        'club_id'=>Club::all()->random()->id
    ];
});
