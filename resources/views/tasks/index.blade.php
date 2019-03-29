@extends('layouts.layout-master')

@section('title', 'Tasks')


@section('content')	
	<div>
		<h1>
			Tasks
		</h1>
	</div>
	<div>
		@foreach ($tasks as $task)
			<li><a href="/tasks/{{ $task->id }} ">{{ $task->title }} : {{ $task->description }}</a></li>
		@endforeach
	</div>
@endsection
