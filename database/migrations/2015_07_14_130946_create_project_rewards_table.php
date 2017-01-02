<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectRewardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_rewards', function(Blueprint $table)
		{
			$table->increments('id');
			$table->float('reward_amount', 8);
			$table->string('reward_img', 100);
			$table->string('reward_introduction',50);
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
		Schema::drop('project_rewards');
	}

}
