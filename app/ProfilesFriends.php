<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilesFriends extends Model
{
    protected $table = 'profiles_friends';

    public static function existsOrCreate($profile, $friend) {
        $profiles_friends =
            ProfilesFriends::where('profile_id', $profile['id'])->where('friend_profile_id', $friend['id'])->get();

        if (!$profiles_friends->isEmpty()) {
            return;
        } else {
            $profiles_friends = new ProfilesFriends();
            $profiles_friends->profile_id = $profile['id'];
            $profiles_friends->friend_profile_id = $friend['id'];
            $profiles_friends->save();
        }
    }

}
