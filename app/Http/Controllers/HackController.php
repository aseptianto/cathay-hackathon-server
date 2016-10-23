<?php

namespace App\Http\Controllers;

use App\ProfilesEducations;
use App\ProfilesFlights;
use App\ProfilesWorks;
use App\ProfilesLocations;
use App\ProfilesHometowns;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Test;

use App\Http\Requests;

class HackController extends Controller
{
    public function DBCheck() {
        $data = Test::dbCheck();
        return view('dbtest', ['data' => $data]);
    }

    public function OAuth() {
        return view('oauth');
    }

    public function hackMatchingAlgorithm($profile_id) {
        //based on profile id - find the profiles in the same flight
        //hardcode all in flight 1

        $profiles = ProfilesFlights::hasRegistered($profile_id,1);


        if(!$profiles->isEmpty()) {
            return json_encode($profiles);
        }

        $profiles = ProfilesFlights::findProfilesInSameFlights($profile_id,1);
        if(!($profiles instanceof Collection)) {
            echo('b');

            //this means it is just created
            return json_encode($profiles);
        }

        $profiles_ids = array();
        foreach($profiles as $profile) {
            array_push($profiles_ids,$profile->profile_id);
        }
        $matching = ProfilesEducations::findMatchingProfileId($profile_id,$profiles_ids);

        if(!empty($matching)) {
            $matching_item = $matching[0];
            $return = ProfilesFlights::placeInNextSeat($profile_id,$matching_item);
            return json_encode($return);
        }


        $matching = ProfilesWorks::findMatchingProfileId($profile_id,$profiles_ids);

        if(!empty($matching)) {
            $matching_item = $matching[0];
            $return = ProfilesFlights::placeInNextSeat($profile_id,$matching_item);
            return json_encode($return);
        }

        $matching = ProfilesHometowns::findMatchingProfileId($profile_id,$profiles_ids);

        if(!empty($matching)) {
            $matching_item = $matching[0];
            var_dump($matching_item);die();
            $return = ProfilesFlights::placeInNextSeat($profile_id,$matching_item);
            return json_encode($return);

        }

        $matching = ProfilesLocations::findMatchingProfileId($profile_id,$profiles_ids);

        if(!empty($matching)) {
            $matching_item = $matching[0];
            $return = ProfilesFlights::placeInNextSeat($profile_id,$matching_item);
            return json_encode($return);

        }

        //assign random seat
        $return = ProfilesFlights::assignRandomSeat($profile_id, 1);

        return json_encode($return);
        //based on the profiles - find out if they are friend
        //if they are not - check if they work in the same company
        //if they are not - check if they studied in the same school
        //if they are not - check if they are from the same locations
        //fetch the profile that matches
        //get their seat number for upcoming flight - this needs profile-seat table with profile_id, row, column, flight no, date
        //assign seat next to it if available - hack only
    }

    public function isNextSeatAvailable() {
        return true;
    }

    public function login() {
        return view('hack.login');
    }

    public function preference() {
        return view('hack.preference');
    }

    public function habit() {
        return view('hack.habit');
    }

    public function social() {
        return view('hack.social');
    }

    public function success() {
        return view('hack.success');
    }

    public function travelStyle() {
        return view('hack.travelstyle');
    }
}
