@extends('layouts.layout-master')

@section('title', 'Tasks')


@section('content')	
<h1 class="title">
	Create a new Task!
</h1>
<form method="POST" action="/tasks">
	{{ csrf_field() }}
	<div class="field">
		<label class="label" for="title">Task Name</label>
		<div class="control">
			<input type="text" class="input" name="title" placeholder="Task Name">
		</div>
	</div>
	<div class="field">		
		<label class="label" for="description">Description</label>
		<div class="control">
			<textarea name="description" class="input" placeholder="Task Description"></textarea>
		</div>	
	</div>
	<div class="field">
		<label class="label" for="priority">Priority</label>
		<div class="control">
			<select name="priority" class="input">		
				<option value="high">High</option>
				<option value="medium">Medium</option>
				<option value="low">Low</option>
			</select>
		</div>
	</div>
	<div class="field">
		<div class="control">
			<button type="submit">Create Task</button>
		</div>
	</div>
</form>

@endsection
