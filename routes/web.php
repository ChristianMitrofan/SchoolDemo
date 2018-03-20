<?php

use App\School;
use App\Student;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'SchoolController@retSchools');

Route::get('/AboutMe', function(){
	return view('aboutme');
});

Route::get('/AddStudent', 'SchoolController@getSchools');
/*
Route::get('/Students', function($schoolname){
	$School = School::where('name', $schoolname)->first();

	return view('students')->with('school',$School);
});*/


Route::post('/Students', 'StudentController@getStudents');

Route::post('/Submit', 'StudentController@submit');

Route::post('/Create', 'SchoolController@create');


