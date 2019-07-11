<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Youtube\Model;
use Faker\Generator as Faker;

$factory->define(\Youtube\Subscription::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return factory(\Youtube\User::class)->create()->id;
        },
        'channel_id' => function(){
            return factory(\Youtube\Channel::class)->create()->id;
        }
    ];
});
