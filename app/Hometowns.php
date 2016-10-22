<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hometowns extends Model
{
    protected $table = 'hometowns';
    protected $primaryKey = 'hometown_id';
    public function existsOrCreate($hometown) {
        $hometowns = Hometowns::where('hometown_id', $hometown->id)->get();

        if (!$hometowns->isEmpty()) {
            return;
        } else {
            $hometowns = new Hometowns();
            $hometowns->hometown_id = $hometown->id;
            $hometowns->hometown_name = $hometown->name;
            $hometowns->save();
        }
    }
}
