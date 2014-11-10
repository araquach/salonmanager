<?php

class SalonsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Salon::truncate();
		
		Salon::create(array(
			'salon' => 'Jakata',
		));
		
		Salon::create(array(
			'salon' => 'Paul Kemp Hairdressing',
		));
	}
}

