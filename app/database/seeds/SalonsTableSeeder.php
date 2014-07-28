<?php

class SalonsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('salons')->delete();
		
		Salon::create(array(
			'salon' => 'Jakata',
		));
		
		Salon::create(array(
			'salon' => 'Paul Kemp Hairdressing',
		));
	}
}

