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
}
