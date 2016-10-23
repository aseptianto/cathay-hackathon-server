<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilesWorks extends Model
{
    protected $table = 'profiles_works';

    public static function existsOrCreate($profile, $work) {
        $profiles_works =
            ProfilesWorks::where('profile_id', $profile['id'])->where('work_id', $work['id'])->get();

        if (!$profiles_works->isEmpty()) {
            return;
        } else {
            $profiles_works = new ProfilesWorks();
            $profiles_works->profile_id = $profile['id'];
            $profiles_works->work_id = $work['id'];
            $profiles_works->save();
        }
    }

    public static function findMatchingProfileId ($profile_id, $profiles_ids) {
        $base_profiles_works = ProfilesWorks::where('profile_id',$profile_id)->get();
        if(!$base_profiles_works->isEmpty()) {
            $result = array();
            foreach($base_profiles_works as $base_profiles_work) {
                $profiles_works = ProfilesWorks::where('work_id',$base_profiles_work->work_id)->whereIn('profile_id',$profiles_ids)->get();
                if(!$profiles_works->isEmpty()) {
                    array_push($result,$profiles_works);
                }
            }
            return $result;
        } else {
            return null;
        }

    }

}
