<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Educations extends Model
{
    protected $table = 'educations';
    protected $primaryKey = 'education_id';

    public static function existsOrCreate($education) {
        $educations = Educations::where('education_id', $education['id'])->get();

        if (!$educations->isEmpty()) {
            return;
        } else {
            $educations = new Educations;
            $educations->education_id = $education['id'];
            $educations->education_name = $education['name'];
            $educations->save();
            return;
        }
    }
}
