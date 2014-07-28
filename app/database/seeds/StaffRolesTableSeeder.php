<?php

class StaffRolesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('staff_roles')->delete();
		
		StaffRole::create(array(
			'job_description' => 'Stylist',
			'target' => '2000',
			'commision' => '20',
		));
	}
}