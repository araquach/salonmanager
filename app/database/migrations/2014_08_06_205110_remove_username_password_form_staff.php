<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveUsernamePasswordFormStaff extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('staffs', function(Blueprint $table)
		{
			$table->dropColumn('username');
			$table->dropColumn('password');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('staffs', function(Blueprint $table)
		{
			$table->string('username');
			$table->string('password');
		});
	}

}
