<?php

namespace App\Http\Controllers;

use App\ProfilesFlights;
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
        ProfilesFlights::findProfilesInSameFlights($profile_id,1);
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
}
