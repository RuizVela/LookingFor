<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Offer;
use Faker\Generator as Faker;
use App\User;

$factory->define(Offer::class, function (Faker $faker) {
    return [
        'title'=>$faker->text(30),
        'description'=>$faker->text(300),
        'group_offer'=>$faker->booLean(),
        'user_id'=>User::all()->random()->id,
        
    ];
});
