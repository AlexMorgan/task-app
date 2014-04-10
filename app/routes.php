<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
| Remember that, in your routes file: the higher up something is called, the more it takes precedence
*/

//If we want somebody to go our site, and our tasks page
//http://yoursite.com/tasks
//In order for our global error redirect to work we must assign a name to our home route
Route::get('/',['as' =>'home', 'uses' => 'TasksController@Index']);

//We create wildcard to access any particular id that we want to by using curly braces 
//We pass a rule to ensure that the url only shows digits of id's that exist, "where id is one or more digits"
Route::get('tasks/{id}', 'TasksController@show')->where('id', '\d+');

//When using wild cards, you must inlcude the variable you're specifying within your function
Route::get('{username}/tasks', function($username)
{
	//find user by their user name from the users table - the get() method will return all users with that particular username 
	//However we'll use the first method, which will find the first one that matches.
	// return User::where('username', '=' , $username)->first();

	//this is just like the logic from before, however Laravel is using call static to parse this method name and use the necessary query
	//return user, where th username equals this value, and give us the first one that matches 
	$user = User::whereUsername($username)->first();

	//get all tasks associated with that user 
	// return Task::whereUserId($user->id)->get();
	return $user->tasks;

	//and return them

});

Route::get('{username}/tasks/{id}', function($username, $id)
{
	//find the task by its id 
	$user = User::whereUsername($username)->first();
	$task = $user->tasks()->findOrFail($id);

	//and load a view to display it - and then pass through the task itself 
	return View::make('tasks.show', compact('task'));
});