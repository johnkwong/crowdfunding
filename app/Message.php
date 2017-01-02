<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

	protected $fillable=[	
		'user_id',
		'receiver_id',
		'title',
		'content',
		
	];

	protected $guarded = ['created_at','updated_at'];

	public function user()
	{
	    	return $this->belongsTo('App\User');
	}

}
