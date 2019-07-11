<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Youtube\Model;
use Faker\Generator as Faker;

$factory->define(\Youtube\Channel::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'user_id' => function() {
            return factory(\Youtube\User::class)->create()->id;
        },
        'description' => $faker->sentence(30)
    ];
});
