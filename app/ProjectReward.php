<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectReward extends Model {

	protected $fillable = [
		'reward_amount',
		'reward_img',
		'reward_introduction',
		'project_id',
	];

	public function projects()
	{
    	return $this->belongsTo('App\Project');
	}
}
