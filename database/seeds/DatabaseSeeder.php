<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(\Youtube\User::class)->create([
            'email' => 'starsettime@gmail.com'
        ]);

        $user2 = factory(\Youtube\User::class)->create([
            'email' => 'starsettime2@gmail.com'
        ]);

        $channel = factory(\Youtube\Channel::class)->create([
            'user_id' => $user->id
        ]);

        $channel2 = factory(\Youtube\Channel::class)->create([
            'user_id' => $user2->id
        ]);

        $channel->subscriptions()->create([
           'user_id' => $user2->id
        ]);

        $channel2->subscriptions()->create([
            'user_id' => $user->id
        ]);

        factory(\Youtube\Subscription::class, 10000)->create([
            'channel_id' => $channel->id
        ]);

        factory(\Youtube\Subscription::class, 20000)->create([
            'channel_id' => $channel2->id
        ]);
    }
}
