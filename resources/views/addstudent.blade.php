@extends('layouts.basiclayout')

@section('content')
	<h1>Add a new Student</h1>
	{!! Form::open(['url' => 'Submit']) !!}
		<div class="form-group">
			{{Form::label('name', 'Name')}}
			{{Form::text('name', '',['class' => 'form-control', 'placeholder' => 'Enter your name'])}}
		</div>
		<div class="form-group">
			{{Form::label('email', 'E-Mail Address')}}
			{{Form::text('email', '',['class' => 'form-control', 'placeholder' => 'Enter your email'])}}
		</div>
		<div class="form-group">
		    {{ Form::Label('school', 'School:') }}
		    {{ Form::select('school_id', $schools, '' , ['class' => 'form-control']) }}
		</div>
		<div>
			{{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
		</div>

	{!! Form::close() !!}
@endsection

@section('sidebar')
	@parent
	<p> You can add a new student by writing the name, the email and select a school from the ones available </p>
@endsection