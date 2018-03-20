<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\School;

class StudentController extends Controller
{
    public function submit(Request $request){
    	$this->validate($request, [ 'name' => 'required', 'email' => 'required']);
        /*
    	$School = School::where('name', $request->input('school'))->first();
        if ($School === null) {
            $School = new School;
            $School->name = $request->input('school');
            $School->save();
        }*/
        
    	$Student = new Student;
    	$Student->name = $request->input('name');
    	$Student->email = $request->input('email');
        $Student->save();

        $Student->mySchool()->attach($request->input('school_id'));
        //$School = School::find($request->input('school_id'));
    	//$Student->mySchool()->save($School);

    	return redirect('/')->with('success', 'Student added');
    }


    public function getStudents(Request $request){
        $School = School::where('id', $request->input('school_id'))->first();

        return view('students')->with('school',$School);
    }
}
