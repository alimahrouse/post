<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\post;

$factory->define(post::class, function (Faker $faker) {
    return [
        'title' =>$faker->sentence(1),
        'body' =>$faker->sentence(1),
        //
    ];
});
