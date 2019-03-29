<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        
	return view('tasks.index', compact('tasks'));

    }

    public function create()
    {
        return view('tasks.create');
    }

    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', compact('task'));   
    }

    public function edit($id)
    {
        $task = Task::find($id);
        
        return view('tasks.edit', compact('task')); 
    }

    public function update($id)
    {
        $task = Task::find($id);
        $task->title = request('title');
        $task->description = request('description');
	$task->priority = request('priority');
	$task->save();

	return redirect('/tasks');
    }

    public function destroy(Task $task) 
    {
    
    }

    public function store()
    {
        $task = new Task();
	
	$task->title = request('title');
	$task->description = request('description');
	$task->priority = request('priority');

        $task->save();

	return redirect('/tasks');
    }
}
