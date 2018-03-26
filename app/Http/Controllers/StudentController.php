<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\School;

class StudentController extends Controller
{
    public function submit(Request $request){
    	$this->validate($request, [ 'name' => 'required', 'email' => 'unique:students,email']);
        
    	$Student = new Student;
    	$Student->name = $request->input('name');
    	$Student->email = $request->input('email');
        $Student->save();

        $Student->mySchools()->attach($request->input('school_ids'));

    	return redirect('/')->with('success', 'Student added');
    }


    public function getStudents(Request $request){
        $School = School::where('id', $request->input('school_id'))->first();

        return view('students')->with('school',$School);
    }
}
