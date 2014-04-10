<?php

class TasksController extends BaseController {
	public function index()
	{
		// fetch all tasks
		//Using Eloquent ORM to fetch our queries without having to use SQL

		//We are grabbing all tasks from the task table and store them as a collection within this variable called $tasks 
		// We will make a model called TasK, which will automatically create this Task:: class
		$tasks = Task::all();

		return View::make('tasks.index', compact('tasks'));


		//load a view to display them
	}

	//We add method show() that correlates to our route.php file and it will receive the value of the wildcard we created
	public function show($id)
	{
		//fetch single task
		//select * from the tasks table where the id = whatever value of the link we clicked on 
		//findOrFail() means try to find an id, but if you don't get anything, throw a "model not found" error
		$task = Task::findOrFail($id);

		//Load a view to display the task
		return View::make('tasks.show', compact('task'));
	}
}