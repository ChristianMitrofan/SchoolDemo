@extends('layouts.basiclayout')

@section('content')
<h1>Homepage</h1>
<p>The ToucanTech database stores information about its members. Each member can be associated with 1 or more school. I built a demo that allows someone to add a new student with the fields “Name”, “Email Address” and "School" (selected from a list). The demo displays all students for a selected school. The primary language I used is PHP with the laravel framework.</p>
{!! Form::open(['url' => '/Students']) !!}
<div class="row"> 
	<div class="col-lg-6">
		<div class="form-group">
			{{ Form::Label('school', 'Find students:') }}
		</div>
	</div>
</div>
<div class="row"> 
	<div class="col-lg-10">
		<div class="form-group">
		    {{ Form::select('school_id', $schools, null, ['class' => 'form-control']) }}
		</div>
	</div>
	<div class="col-lg-2">
		<div>
			{{Form::submit('Search', ['class'=> 'btn btn-primary btn-block'])}}
		</div>
	</div>
</div>
{!! Form::close() !!}

{!! Form::open(['url' => '/Create']) !!}
<div class="row"> 
	<div class="col-lg-6">
		<div class="form-group">
			{{Form::label('name', 'Add a School:')}}
		</div>
	</div>
</div>
<div class="row"> 
	<div class="col-lg-10">
		<div class="form-group">
			{{Form::text('name', '',['class' => 'form-control', 'placeholder' => 'Enter the name of your school'])}}
		</div>
	</div>
	<div class="col-lg-2">
		<div>
			{{Form::submit('Add School', ['class'=> 'btn btn-primary btn-block'])}}
		</div>
	</div>
</div>
{!! Form::close() !!}
@endsection
@section('sidebar')
	@parent
	<p>From the Homepage you can either search students by selecting a school from the ones already available, or add a new school to the database.</p>
@endsection
