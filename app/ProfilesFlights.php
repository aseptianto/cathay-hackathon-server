<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilesFlights extends Model
{
    protected $table = 'profiles_flights';

    public static function findProfilesInSameFlights($profile_id, $flight_id) {
        $profiles = ProfilesFlights::where('flight_id',$flight_id)->get();
        if(!$profiles->isEmpty()) {
            return $profiles;
        } else {
            $profiles = new ProfilesFlights();
            $profiles->profile_id = $profile_id;
            $profiles->flight_id = $flight_id;
            $profiles->flight_row = rand(1,60);
            $profiles->flight_col = chr(65+rand(0,6));
            $profiles->save();
        }
    }

    public static function placeInNextSeat($profile_id, $matching_profile_flight) {
        $profiles = new ProfilesFlights();
        $profiles->profile_id = $profile_id;
        $profiles->flight_id = $matching_profile_flight['flight_id'];
        $profiles->flight_row = $matching_profile_flight['flight_row'];
        $matching_profile_flight['flight_col']++;
        if($matching_profile_flight['flight_col'] == 'H') {
            $profiles->flight_col = 'A';
        }
        else {
             $profiles->flight_col = $matching_profile_flight['flight_col'];
         }
        $profiles->save();
    }
}
