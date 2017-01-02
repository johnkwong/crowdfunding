<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStartersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('starters', function(Blueprint $table)
		{

			$table->increments('id');
			$table->string('name', 50);
			$table->string('id_no', 25);
			$table->string('email', 50);
			$table->string('phone_no', 20);
			$table->string('introduction', 1000);
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
		Schema::drop('starters');
	}



}
