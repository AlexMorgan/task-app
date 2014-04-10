<?php 

//Because we are extended "Eloquent" our task model has access to all these Eloquent helper lists 
class Task extends Eloquent {

//Creating relationship between user and tasks - must be done from both ends 
//When you find a task and you want to find the user associated with that task - a task must always belong to one user
	//the name of this public funtion "method()" doesn't matter, we could have called it owner()
	public function user()
	{
		//A task belongs to a user
		return $this->belongsTo('User');
	}

}