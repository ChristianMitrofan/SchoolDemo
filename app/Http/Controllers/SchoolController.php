<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;

class SchoolController extends Controller
{
    public function create(Request $request){
    	$this->validate($request, ['name' => 'required']);
    	
    	$School = School::where('name', $request->input('name'))->first();
        if ($School === null) {
            $School = new School;
            $School->name = $request->input('name');
            $School->save();

            return redirect('/')->with('success', 'School added');
        }

    	return redirect('/')->with('failure', 'School already exists');
    }

    public function getSchools(){
    	$schools = School::pluck('name','id');

    	return view('AddStudent')->with('schools',$schools);
    }

    public function retSchools(){
        $schools = School::pluck('name','id');

        return view('Homepage')->with('schools',$schools);
    }
}