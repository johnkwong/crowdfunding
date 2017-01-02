<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_reports', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('report_title',100);
			$table->text('report_content');
			$table->timestamps();

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
		Schema::drop('project_reports');
	}

}
