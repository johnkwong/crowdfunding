<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model {

	protected $fillable=[	
		'company_name',
		'logo_path',
		'user_id',
	];

	public function user()
	{
	    return $this->belongsTo('App\User');
	}
	public function sponsor_projects()
	{
    	return $this->hasMany('App\SponsorProject');
	}

}
