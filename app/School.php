<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function myStudents()
    {
        return $this->belongsToMany('App\Student');
    }
}
