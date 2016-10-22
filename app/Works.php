<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    protected $table = 'works';
    protected $primaryKey = 'work_id';

    public function existsOrCreate($work) {
        $works = Works::where('work_id', $work->id)->get();

        if (!$works->isEmpty()) {
            return;
        } else {
            $works = new Works;
            $works->work_id = $work->id;
            $works->work_name = $work->name;
            $works->save();
        }
    }
}
