<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function mySchools()
    {
        return $this->belongsToMany('App\School');
    }
}
