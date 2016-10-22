<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilesWorks extends Model
{
    protected $table = 'profiles_works';

    public static function existsOrCreate($profile, $work) {
        $profiles_locations =
            ProfilesLocations::where('profile_id', $profile['id'])->where('work_id', $work['id'])->get();

        if (!$profiles_locations->isEmpty()) {
            return;
        } else {
            $profiles_locations = new ProfilesLocations();
            $profiles_locations->profile_id = $profile['id'];
            $profiles_locations->work_id = $work['id'];
            $profiles_locations->save();
        }
    }

}
