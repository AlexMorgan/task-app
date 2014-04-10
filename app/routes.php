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

//John's tasks
//http://yoursite.com/tasks