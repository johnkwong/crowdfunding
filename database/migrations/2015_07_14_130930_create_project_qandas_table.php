<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectQandasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_qandas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('qanda_content', 500);
			$table->string('qanda_answer', 500);
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
		Schema::drop('project_qandas');
	}

}
