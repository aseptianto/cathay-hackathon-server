<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilesEducations extends Model
{
    protected $table = 'profiles_educations';

    public static function existsOrCreate($profile, $education) {
        $profiles_educations =
            ProfilesEducations::where('profile_id', $profile['id'])->where('education_id', $education['id'])->get();

        if (!$profiles_educations->isEmpty()) {
            return;
        } else {
            $profiles_educations = new ProfilesEducations();
            $profiles_educations->profile_id = $profile['id'];
            $profiles_educations->education_id = $education['id'];
            $profiles_educations->save();
        }
    }



}
