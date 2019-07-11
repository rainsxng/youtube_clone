<?php

namespace Youtube\Http\Controllers;

use Illuminate\Http\Request;
use Youtube\Channel;
use Youtube\Subscription;

class SubscriptionController extends Controller
{

    public function store(Channel $channel)
    {
        return $channel->subscriptions()->create([
           'user_id' =>auth()->user()->id
        ]);
    }



    public function destroy(Channel $channel, Subscription $subscription)
    {
        $subscription->delete();

        return response()->json(
            []
        );
    }
}
