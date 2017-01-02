<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sponsor_projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->float('amount', 8);
			$table->string('messages', 500);
			$table->timestamps();

			$table->integer('sponsor_id')->unsigned();

			$table->foreign('sponsor_id')
				->references('id')
				->on('sponsors')
				->onDelete('cascade');	

			$table->integer('project_id')->unsigned();

			$table->foreign('project_id')
				->references('id')
				->on('projects')
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
		Schema::drop('sponsor_projects');
	}

}
