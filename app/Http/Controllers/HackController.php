<?php

namespace App\Http\Controllers;

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
