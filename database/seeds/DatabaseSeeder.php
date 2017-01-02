<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$this->call('UserTableSeeder');
		$this->call('StarterTableSeeder');
		$this->call('ProjectTableSeeder');
		$this->call('PaymentTableSeeder');
		$this->call('SponsorTableSeeder');
		$this->call('ProjectSponsorTableSeeder');
		$this->call('FollowTableSeeder');
		$this->call('RewardTableSeeder');
	
	}

}
