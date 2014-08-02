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

		// $this->call('UserTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('PeopleTableSeeder');
		$this->call('StaffRolesTableSeeder');
		$this->call('SalonsTableSeeder');
		$this->call('StaffsTableSeeder');
		$this->call('HolidaysTableSeeder');
	}

}
