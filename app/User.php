<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


	public function starters()
	{
    	return $this->hasMany('App\Starter');
	}

	public function sponsors()
	{
    	return $this->hasMany('App\Sponsor');
	}

	public function project_qandas()
	{
    	return $this->hasMany('App\ProjectQanda');
	}

	public function follow_projects()
	{
    	return $this->hasMany('App\FollowProject');
	}

	public function payments()
	{
    	return $this->hasMany('App\Payment');
	}
	public function suggestions()
	{
	    	return $this->hasMany('App\Suggestion');
	}
	public function messages()
	{
	    	return $this->hasMany('App\Message','receiver_id');
	}

	public function sponsor_projects()
    {
        return $this->hasManyThrough('App\SponsorProject', 'App\Sponsor', 'user_id','sponsor_id');
    }

    public function projects()
    {
        return $this->hasManyThrough('App\Project', 'App\Starter', 'user_id','starter_id');
    }

    public function followrojects()
    {
    	return $this->belongsToMany('App\Project','follow_projects');
    }

    public function sponsor()
    {
        return $this->belongsToMany('App\Project', 'sponsor_projects', 'sponsor_id','project_id');
    }
}
