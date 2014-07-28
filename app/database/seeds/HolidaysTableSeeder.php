<?php

class HolidaysTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('holidays')->delete();
		
		Holiday::create(array(
			'staff_id' => '1',
			'hours_requested' => '4',
			'prebooked' => '1',
			'request_date_from' => '2008-11-11 13:23:44',
			'request_date_to' => '2008-11-15 13:23:44',
			'approved' => '0',
			'requested_on_date' => '2014-06-11 13:23:44',
		));
	}
}

