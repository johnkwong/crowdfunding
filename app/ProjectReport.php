<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectReport extends Model {

	protected $fillable = [
		'report_title',
		'report_content',
		'project_id',
	];

	public function projects()
	{
    	return $this->belongsTo('App\Project');
	}

}
