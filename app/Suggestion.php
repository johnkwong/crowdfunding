<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model {
	protected $fillable=[	
		
			'user_id',
			'project_id',
			'starter_info',
			'project_info',
			'project_outline',
			'project_reward',
			
	];

	protected $guarded = ['created_at','updated_at'];

	public function user()
	{
	    	return $this->belongsTo('App\User');
	}
	public function project()
	{
	    	return $this->belongsTo('App\Project');
	}


}
