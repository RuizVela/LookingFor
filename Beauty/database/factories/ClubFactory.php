<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Club;
use Faker\Generator as Faker;

$factory->define(Club::class, function (Faker $faker) {
    return [
        'name'=> 'Club'.rand(1,1000),
        'description'=> $faker->text(100),
    ];
});
