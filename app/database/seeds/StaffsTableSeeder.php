<?php

class StaffsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Staff::truncate();
		
		Staff::create(array(
			'person_id' => '1',
			'user_id' => '1',
			'iris' => '111',
			'salon_id' => '1',
			'staff_role_id' => '1',
			'dob' => '1976-02-16',
			'working_hours_week' => '40',
			'working_hours_month' => '160',
			'holiday_entitlement' => '28',
			'active' => '1',
			'role' => '1',
		));
		
		Staff::create(array(
			'person_id' => '3',
			'user_id' => '2',
			'iris' => '333',
			'salon_id' => '2',
			'staff_role_id' => '2',
			'dob' => '1984-08-30',
			'working_hours_week' => '40',
			'working_hours_month' => '160',
			'holiday_entitlement' => '28',
			'active' => '1',
			'role' => '2',
		));
	}
}

