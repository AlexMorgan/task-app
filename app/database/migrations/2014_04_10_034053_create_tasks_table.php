<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function(Blueprint $table)
		{
			//Now we use Laravel's Schema:: class to handle the process of declaring what fields we need
			$table->increments('id');
			$table->string('title');
			$table->text('body');
			//We want to have an additional field that will accept an integer that will correspond to the id of the user who created the task
			$table->integer('user_id');
			$table->boolean('completed');
			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tasks', function(Blueprint $table)
		{
			//
		});
	}

}