@extends('layouts.master')

@section('content')
	<!-- 
	This entire view will have access to the $tasks variable, we created the #tasks variable in our TaskController and then
	we loaded a view  and used the compact() function and passed it the string 'tasks'
	 -->
	<h1>All Tasks</h1>
	<ul class="list-group">	
		<!-- Using BLADE we can easily create a foreach loop -->
		@foreach($tasks as $task)
			<!-- We are going to use the link_to helper function provided by Laravel, we pass it a path,
			in this case = "tasks/$task->id" and then pass it the text for the anchor tag-->
			<li class="list-group-item"> {{ link_to("tasks/$task->id", $task->title) }} </li>
		@endforeach

@stop