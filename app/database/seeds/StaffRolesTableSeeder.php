<?php

class StaffRolesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		StaffRole::truncate();
		
		StaffRole::create(array(
			'job_description' => 'Stylist',
			'target' => '2000',
			'commision' => '20',
		));
		
		StaffRole::create(array(
			'job_description' => 'Senior Stylist',
			'target' => '3000',
			'commision' => '30',
		));
	}
}