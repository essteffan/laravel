<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        [
            'name' => "Stefan Cuculeac",
            'email' => "essteffan@yahoo.com",
            'password' => bcrypt("111111"),
            'remember_token' => str_random(10),
        ],
        [
            'name' => "Andreea Cuculeac",
            'email' => "andreeea@yahoo.com",
            'password' => bcrypt("111111"),
            'remember_token' => str_random(10),
        ]

    ];
});
