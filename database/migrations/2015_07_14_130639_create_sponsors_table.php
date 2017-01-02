<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sponsors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('company_name', 50);
			$table->string('logo_path', 100);

			$table->timestamps();

			$table->integer('user_id')->unsigned();

			$table->foreign('user_id')
				->references('id')
				->on('users')
				->onDelete('cascade');	

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sponsors');
	}

}
