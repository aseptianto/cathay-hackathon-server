<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilesLocations extends Model
{
    protected $table = 'profiles_locations';

    public static function existsOrCreate($profile, $location) {
        $profiles_locations =
            ProfilesLocations::where('profile_id', $profile['id'])->where('location_id', $location['id'])->get();

        if (!$profiles_locations->isEmpty()) {
            return;
        } else {
            $profiles_locations = new ProfilesLocations();
            $profiles_locations->profile_id = $profile['id'];
            $profiles_locations->location_id = $location['id'];
            $profiles_locations->save();
        }
    }
    public static function findMatchingProfileId ($profile_id, $profiles_ids) {
        $base_profiles_locations = ProfilesLocations::where('profile_id',$profile_id)->get();
        if(!$base_profiles_locations->isEmpty()) {
            $result = array();
            foreach($base_profiles_locations as $base_profiles_location) {
                $profiles_locations = ProfilesLocations::where('location_id',$base_profiles_location->location_id)->whereIn('profile_id',$profiles_ids)->get();
                if(!$profiles_locations->isEmpty()) {
                    array_push($result,$profiles_locations);
                }
            }
            return $result;
        } else {
            return null;
        }

    }

}
