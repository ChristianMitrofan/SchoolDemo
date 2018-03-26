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
			{{Form::email('email', '',['class' => 'form-control', 'placeholder' => 'example@gmail.com'])}}
		</div>
		<div class="form-group">
		    {{ Form::Label('schools', 'Schools:') }}
		    {{ Form::select('school_ids[]', $schools, '' , ['class' => 'form-control' , 'id' => 'schools' , 'multiple' => 'multiple']) }}
		</div>
		<div>
			{{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
		</div>

	{!! Form::close() !!}
@endsection

@section('sidebar')
	@parent
	<p> You can add a new student by writing the name, the email and select a school from the ones available. To select multiple schools, please press the control key and then select the schools that you enrolled to. </p>
@endsection