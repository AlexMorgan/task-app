<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//If we want somebody to go our site, and our tasks page
//http://yoursite.com/tasks
Route::get('tasks', 'TasksController@Index');

//We create wildcard to access any particular id that we want to by using curly braces 
//We pass a rule to ensure that the url only shows digits of id's that exist, "where id is one or more digits"
Route::get('tasks/{id}', 'TasksController@show')->where('id', '\d+');

//John's tasks
//http://yoursite.com/tasks