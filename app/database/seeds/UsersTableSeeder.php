<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();
		
		User::create(array(
			'username' => 'adamcarter',
			'password' => Hash::make('adam123'),
			'role' => '1',
		));
		
		User::create(array(
			'username' => 'jimmysharpe',
			'password' => Hash::make('jim123'),
			'role' => '2',
		));
		
	}
	

}