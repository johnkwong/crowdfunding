<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{

			$table->increments('id');
			$table->string('name', 16);
			$table->tinyInteger('class');
			$table->float('pre_amount', 8);
			$table->string('outline', 255);
			$table->date('start_date');
			$table->date('end_date');
			$table->string('cover_img_path', 100);
			$table->string('video_link', 100);
			$table->text('content');
			$table->tinyInteger('status');
			$table->integer('hitpoint');
			$table->timestamps();


			$table->integer('starter_id')->unsigned();

			$table->foreign('starter_id')
					->references('id')
					->on('starters')
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
		Schema::drop('projects');
	}

}
