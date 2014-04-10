@extends('layouts.master')

@section('content')

	<!-- This h1 tag will dynamically display the task title -->
	<h1> {{ $task->title }} </h1>

	<!-- This article tag will display the body of the task -->
	<article> {{ $task->body }} </article>

	<!-- first parameter is the url, second parameter is the dialog -->
	<p> {{ link_to('/tasks', 'Go back') }} </p>

@stop