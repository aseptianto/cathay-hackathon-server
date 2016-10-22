<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilesLocations extends Model
{
    protected $table = 'profiles_locations';

    public static function existsOrCreate($profile, $education) {
        $profiles_locations =
            ProfilesLocations::where('profile_id', $profile['id'])->where('location_id', $location['id'])->get();

        if (!$profiles_locations->isEmpty()) {
            return;
        } else {
            $profiles_locations = new ProfilesLocations();
            $profiles_locations->profile_id = $profile['id'];
            $profiles_locations->education_id = $location['id'];
            $profiles_locations->save();
        }
    }

}
