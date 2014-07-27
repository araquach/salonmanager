<?php



use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidayTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('holiday', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('staff_id');
			$table->integer('hours_requested');
			$table->boolean('prebooked');
			$table->dateTime('request_date_from');
			$table->dateTime('request_date_to');
			$table->boolean('approved');
			$table->dateTime('requested_on_date');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('holiday');
	}

}
