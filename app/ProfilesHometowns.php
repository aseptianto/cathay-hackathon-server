<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilesHometowns extends Model
{
    protected $table = 'profiles_hometowns';

    public static function existsOrCreate($profile, $hometown) {
        $profiles_hometowns =
            ProfilesHometowns::where('profile_id', $profile['id'])->where('hometown_id', $hometown['id'])->get();

        if (!$profiles_hometowns->isEmpty()) {
            return;
        } else {
            $profiles_hometowns = new ProfilesHometowns();
            $profiles_hometowns->profile_id = $profile['id'];
            $profiles_hometowns->hometown_id = $hometown['id'];
            $profiles_hometowns->save();
        }
    }


}
