<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->float('amount', 8);
			$table->tinyInteger('type');
			$table->timestamps();

			$table->integer('project_id')->unsigned();

			$table->foreign('project_id')
					->references('id')
					->on('projects')
					->onDelete('cascade');

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
		Schema::drop('payments');
	}

}
