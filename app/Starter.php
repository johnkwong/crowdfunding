<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Starter extends Model {

	protected $fillable = [
		'name',
		'id_no',
		'email',
		'phone_no',
		'introduction',
		'user_id',
	];



	public function user()
	{
    	return $this->belongsTo('App\User');
	}

	public function projects()
	{
    	return $this->hasMany('App\Project');
	}

}
