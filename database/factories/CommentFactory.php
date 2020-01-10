<?php

use App\Comment;
use Faker\Generator as Faker;
use App\User;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body'=>$faker->text(300),
        'user_id'=>User::all()->random()->id,
        'profile_id'=>User::all()->random()->id
    ];
});
