<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    protected $table = 'profiles';
    protected $primaryKey = 'profile_id';

    public static function existsOrCreate($profile) {
        $profiles = Profiles::where('profile_id', $profile['id'])->get();

        if (!$profiles->isEmpty()) {
            return;
        } else {
            $profiles = new Profiles;
            $profiles->profile_id = $profile['id'];
            $profiles->profile_gender = $profile['gender'];
            $profiles->profile_email = $profile['email'];
            $profiles->profile_age_range = $profile['age'];

            $profiles->save();
        }
    }
}
