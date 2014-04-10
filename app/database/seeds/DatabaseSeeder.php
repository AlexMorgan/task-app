<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//Now when we call an artisan command DB:seed its going to look for all seeders that we referenced in this master file and trigger them
		$this->call('UsersTableSeeder');
	}

}