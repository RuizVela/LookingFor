<?php

use App\Answer;
use Faker\Generator as Faker;
use App\User;
use App\Offer;

$factory->define(Answer::class, function (Faker $faker) {
    return [
        'body'=>$faker->text(300),
        'user_id'=>User::all()->random()->id,
        'offer_id'=>Offer::all()->random()->id
    ];
});
