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

    public static function findMatchingProfileId ($profile_id, $profiles_ids) {
        $base_profiles_hometowns = ProfilesHometowns::where('profile_id',$profile_id)->get();
        if(!$base_profiles_hometowns->isEmpty()) {
            $result = array();
            foreach($base_profiles_hometowns as $base_profiles_hometown) {
                $profiles_hometowns = ProfilesHometowns::where('hometown_id',$base_profiles_hometown->hometown_id)->whereIn('profile_id',$profiles_ids)->get();
                if(!$profiles_hometowns->isEmpty()) {
                    
                    array_push($result,$profiles_hometowns);
                }
            }
            return $result;
        } else {
            return null;
        }

    }


}
