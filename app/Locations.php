<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    protected $table = 'locations';
    protected $primaryKey = 'location_id';

    public static function existsOrCreate($location) {
        $locations = Locations::where('location_id', $location->id)->get();

        if (!$locations->isEmpty()) {
            return;
        } else {
            $locations = new Locations;
            $locations->location_id = $location['id'];
            $locations->location_name = $location['name'];
            $locations->save();
        }
    }
}
