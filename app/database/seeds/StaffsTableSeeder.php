<?php

class StaffsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('staffs')->delete();
		
		Staff::create(array(
			'person_id' => '1',
			'iris' => '111',
			'salon_id' => '1',
			'staff_role_id' => '1',
			'dob' => '1976-02-16',
			'username' => 'adamcarter',
			'password' => 'turnip',
			'working_hours_week' => '40',
			'working_hours_month' => '160',
			'holiday_entitlement' => '28',
			'active' => '1',
			'role' => '1',
		));
	}
}

