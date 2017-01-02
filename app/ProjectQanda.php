<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectQanda extends Model {

	protected $fillable = [
		'qanda_content',
		'qanda_answer',
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
