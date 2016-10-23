<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilesFlights extends Model
{
    protected $table = 'profiles_flights';

    public static function hasRegistered($profile_id,$flight_id)
    {
        // if registered, return the profileflight, else it should be null
        $profiles = ProfilesFlights::where('profile_id', $profile_id)->where('flight_id',$flight_id)->first();

        return $profiles;

    }

    public static function findProfilesInSameFlights($profile_id, $flight_id) {
        $profiles = ProfilesFlights::where('flight_id',$flight_id)->where('profile_id','<>',$profile_id)->get();
        if(!$profiles->isEmpty()) {
            return $profiles;
        } else {
            $profiles = new ProfilesFlights();
            $profiles->profile_id = $profile_id;
            $profiles->flight_id = $flight_id;
            $profiles->flight_row = rand(1,60);
            $profiles->flight_col = chr(65+rand(0,6));
            $profiles->save();

            return $profiles;
        }
    }

    public static function assignRandomSeat($profile_id, $flight_id) {
        $profiles = new ProfilesFlights();
        $profiles->profile_id = $profile_id;
        $profiles->flight_id = $flight_id;
        $profiles->flight_row = rand(1,60);
        $profiles->flight_col = chr(65+rand(0,6));
        $profiles->save();

        return $profiles;

    }

    public static function placeInNextSeat($profile_id, $matching_profile_flight) {
        $profiles = new ProfilesFlights();
        $profiles->profile_id = $profile_id;
        $profiles->flight_id = $matching_profile_flight->flight_id;
        $profiles->flight_row = $matching_profile_flight->flight_row;
        $matching_profile_flight->flight_col++;
        if($matching_profile_flight->flight_col == 'H') {
            $profiles->flight_col = 'F';
        }
        else {
             $profiles->flight_col = $matching_profile_flight->flight_col;
         }
        $profiles->save();

        return $profiles;
    }
}
