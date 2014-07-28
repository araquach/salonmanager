<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConstraintsToStaffs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('staffs', function(Blueprint $table)
		{
			$table->foreign('person_id')->references('id')->on('people');
			$table->foreign('salon_id')->references('id')->on('salons');
			$table->foreign('staff_role_id')->references('id')->on('staff_roles');
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
			$table->dropForeign('staffs_person_id_foreign');
			$table->dropForeign('staffs_salon_id_foreign');
			$table->dropForeign('staffs_staff_role_id_foreign');
		});
	}

}
