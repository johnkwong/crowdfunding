<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Request;
class Project extends Model {

	protected $fillable = [
		'name',
		'class',
		'pre_amount',
		'outline',
		'start_date',
		'end_date',
		'cover_img_path',
		'video_link',
		'content',
		'status',
		'starter_id',
	];

	public function starters()
	{
		return $this->belongsTo('App\Starter');
	}

	public function project_rewards()
	{
    	return $this->hasMany('App\ProjectReward');
	}

	public function project_reports()
	{
    	return $this->hasMany('App\ProjectReport');
	}

	public function project_qandas()
	{
    	return $this->hasMany('App\ProjectQanda');
	}
	public function follow_projects()
	{
    	return $this->hasMany('App\FollowProject');
	}
	public function sponsor_projects()
	{
    	return $this->hasMany('App\SponsorProject');
	}

	public function payments()
	{
    	return $this->hasMany('App\Payment');
	}

	public function suggestions()
	{
	    	return $this->hasOne('App\Suggestion');
	}

	//9-21多加	
    public function sponsors()
    {
    	 return $this->belongsToMany('App\Sponsor','sponsor_projects', 'project_id');
    }

   
	public function facebook_api($projects){
		$project_url = '';
		foreach ($projects as $projects_id) {
			//array_push($project_url, "http://".Request::root()."/projects/".$projects_id->id);
			$project_url .= "".Request::root()."/projects/".$projects_id->id.",";
		}
		$facebook_api = 'https://api.facebook.com/method/links.getStats?urls='.$project_url.'&format=json';
			
		$ch = curl_init($facebook_api);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$raw_response = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($raw_response);
		return $project_url;
	}

	public function getLikeCount($id){
		return json_decode(file_get_contents('http://api.facebook.com/method/links.getStats?urls=http://'.$_SERVER['SERVER_NAME'].'/projects/'.$id.'&format=json'), false)[0]->like_count;
	}

	public function getShareCount($id){
		return json_decode(file_get_contents('http://api.facebook.com/method/links.getStats?urls=http://'.$_SERVER['SERVER_NAME'].'/projects/'.$id.'&format=json'), false)[0]->share_count;
	}

	public function payamount($project){
		return $project->payments()->where('project_id',$project->id)->sum('amount');
	}

	/*public function updateProjectStatus(){
		$project = Project::findOrFail(1);
		$project->status = 1;
		$project->save();
	}*/

}
