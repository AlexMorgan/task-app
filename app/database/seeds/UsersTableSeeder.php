<?php 

class UsersTableSeeder extends Seeder {

	//run() method is automatically triggered nby laravel 
	public function run()
	{

		//to eliminate the problem of the integrity constraint error of duplicated rows everytime we seed the database, 
		//we are going to truncate our users table, which will empty out the users table, everytime we run it 
		User::truncate();

		User::create([
			'username' => 'AlexMorgan',
			'email' => 'alexmorgan.am@gmail.com',
			'password' => '12345'
		]);

		User::create([
			'username' => 'EllenLomanto',
			'email' => 'ellenlomanto@gmail.com',
			'password' => 'ellen'
		]);
	}

}