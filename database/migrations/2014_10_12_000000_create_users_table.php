<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			
			$table->increments('id');
			$table->string('name', 50);
			$table->string('email', 50)->unique();
			$table->string('password', 60);
			$table->string('phone_no', 20);
			$table->date('birthday');
			$table->tinyInteger('gender');
			$table->string('country', 25);
			$table->string('city',25);
			$table->string('info', 500);
			$table->string('facebook', 150);
			$table->string('youtube', 150);
			$table->string('website', 150);
			$table->tinyInteger('permission');

			$table->string('avator', 150);
			$table->string('facebook_id');

			$table->rememberToken();
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
		Schema::drop('users');
	}

}
