<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function mySchool()
    {
        return $this->belongsToMany('App\School');
    }
}
