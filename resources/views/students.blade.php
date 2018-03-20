@extends('layouts.basiclayout')

@section('content')
	<h1>{{$school->name}}'s students:</h1>
	@if(count($school->myStudents) > 0)
		@foreach($school->myStudents as $student)
			<ul class = "list-group">
				<li class="list-group-item">Name: {{$student->name}}</li>
				<li class="list-group-item">Email: {{$student->email}}</li>
			</ul>
		@endforeach
	@endif
@endsection</p>

@section('sidebar')
	@parent
	<p>This is appended to the sidebar
@endsection