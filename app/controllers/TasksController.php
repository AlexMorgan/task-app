<?php

class TasksController extends BaseController {
	public function index()
	{
		// fetch all tasks
		//Using Eloquent ORM to fetch our queries without having to use SQL

		//We are grabbing all tasks from the task table and store them as a collection within this variable called $tasks 
		// We will make a model called TasK, which will automatically create this Task:: class
		$tasks = Task::all();


		//load a view to display them
	}
}