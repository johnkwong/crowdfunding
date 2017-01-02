<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SponsorProject extends Model {

	protected $fillable=[	
		'amount',
		'messages',
		'sponsor_id',
		'project_id',
	];

	public function sponsors()
	{
		return $this->belongsTo('App\Sponsor');
	}

	public function projects()
	{
    	return $this->belongsTo('App\Project');
	}

}
