<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilesFlights extends Model
{
    protected $table = 'profiles_flights';

    public static function findProfilesInSameFlights($profile_id, $flight_id) {
        $profiles = ProfilesFlights::where('profile_id',$profile_id)->get();
        if(!$profiles->isEmpty()) {
            return $profiles;
        } else {
            $profiles = new ProfilesFlights();
            $profiles->profile_id = $profile_id;
            $profiles->flight_id = $flight_id;
            $profiles->flight_row = rand(1,60);
            $profiles->flight_col = chr(64+rand(0,7));
            $profiles->save();
        }
    }

    public static function placeInNextSeat($profile_id, $matching_profile_flight) {
        $profiles = new ProfilesFlights();
        $profiles->profile_id = $profile_id;
        $profiles->flight_id = $matching_profile_flight['flight_id'];
        $profiles->flight_row = $matching_profile_flight['flight_row'];
        $profiles->flight_col = $matching_profile_flight['flight_col']++;
        $profiles->save();
    }
}
