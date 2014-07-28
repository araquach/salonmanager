<?php

class PeopleTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('people')->delete();
		
		Person::create(array(
			'first_name' => 'Adam',
			'second_name' => 'Carter',
			'address1' => '20 Test Road',
			'address2' => 'Great Sankey',
			'address3' => 'Warrington',
			'postcode' => 'WA10 10TS',
			'email' => 'araquach@yahoo.co.uk',
			'phone' => '01925 123456',
			'mobile' => '07123456789',
		));
		
		Person::create(array(
			'first_name' => 'John',
			'second_name' => 'Jones',
			'address1' => '25 Testicle Drive',
			'address2' => 'Stockton Heath',
			'address3' => 'Warrington',
			'postcode' => 'WA4 5SH',
			'email' => 'john@yahoo.co.uk',
			'phone' => '01925 654321',
			'mobile' => '07987654321',
		));
	}
}



