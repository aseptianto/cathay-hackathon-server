<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    public static function dbCheck() {
        return Test::where('id', '=', 1)->get()->toArray();
    }
}
