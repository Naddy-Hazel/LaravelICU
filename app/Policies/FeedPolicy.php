<?php

namespace App\Policies;

use App\Models\Feed;
use App\Models\User;

class FeedPolicy
{
    /**
     * Create a new policy instance.
     */
    public function update(User $user, Feed $feed)
    {
        return $user->id === $feed->user_id; //boolean
    }
}
