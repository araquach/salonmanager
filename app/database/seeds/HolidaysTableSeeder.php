<?php

class HolidaysTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Holiday::truncate();
		
		Holiday::create(array(
			'staff_id' => '1',
			'hours_requested' => '4',
			'prebooked' => '1',
			'request_date_from' => '2008-11-11 13:23:44',
			'request_date_to' => '2008-11-15 13:23:44',
			'approved' => '0',
			'requested_on_date' => '2014-06-11 13:23:44',
		));
		
		Holiday::create(array(
			'staff_id' => '2',
			'hours_requested' => '16',
			'prebooked' => '0',
			'request_date_from' => '2014-09-16 13:23:44',
			'request_date_to' => '2014-09-18 13:23:44',
			'approved' => '0',
			'requested_on_date' => '2014-07-19 13:23:44',
		));
	}
}

