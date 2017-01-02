<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FollowProject extends Model {

	protected $fillable = [
		'project_id',
		'user_id',
	];

	public function projects()
	{
    	return $this->belongsTo('App\Project');
	}
	
		public function user()
	{
    	return $this->belongsTo('App\User');
	}
}
