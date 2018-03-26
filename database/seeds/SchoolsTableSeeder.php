<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\School::create(['name' => 'University of Athens']);
    	App\School::create(['name' => 'London Imperial College']);
    	App\School::create(['name' => '5th High school']);
    	App\School::create(['name' => '6th Junior High school']);
    	App\School::create(['name' => '110 Primary school']);
    }
}
