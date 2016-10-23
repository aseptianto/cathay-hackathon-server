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


    public static function findMatchingProfileId ($profile_id, $profiles_ids) {
        $base_profiles_educations = ProfilesEducations::where('profile_id',$profile_id)->get();
        if(!$base_profiles_educations->isEmpty()) {
            $result = array();
            foreach($base_profiles_educations as $base_profiles_education) {
                $profiles_educations = ProfilesEducations::where('education_id',$base_profiles_education->education_id)->whereIn('profile_id',$profiles_ids)->get();
                if(!$profiles_educations->isEmpty()) {
                    array_push($result,$profiles_educations);
                }
            }
            return $result;
        } else {
            return null;
        }

    }


}
