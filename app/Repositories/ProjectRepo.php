<?php

namespace Repositories;
use Carbon\Carbon;
use \App\Project;

class ProjectRepo implements ProjectInterface {

	protected $projects;

	public function get($class, $sort) {
		

		
		
		// $now = Carbon::now();
		// if($sort == 'a'){
		// 	if($class == 'hot')
		// 		$projects = Project::whereIn('status',[2,3,4])->where('hitpoint','>','100')->orderBy('created_at', 'desc')->paginate(30);
		// 	else if($class == 'nonbegin')
		// 		$projects = Project::whereIn('status',[2,4])->where('start_date','>',$now)->orderBy('created_at', 'desc')->paginate(30);
		// 	else if($class == 'status2')
		// 		$projects = Project::whereIn('status',[2,4])->where('start_date','<=',$now)->orderBy('created_at', 'desc')->paginate(30);
		// 	else if($class == 'status3')
		// 		$projects = Project::whereIn('status',[3,5])->orderBy('created_at', 'desc')->paginate(30);
		// 	else if($class == 0)
		// 		$projects = Project::whereIn('status',[2,3,4])->orderBy('created_at', 'desc')->paginate(30);
		// 	else if($class <= 7 && $class >=1)
		// 		$projects = Project::where('class','=', $class)->whereIn('status',[2,3,4])->orderBy('created_at', 'desc')->paginate(30);

		// }
		// elseif($sort == 'b'){
		// 	if($class == 'hot')
		// 		$projects = Project::whereIn('status',[2,3,4])->where('hitpoint','>','100')->orderBy('hitpoint','desc')->paginate(30);
		// 	else if($class == 'nonbegin')
		// 		$projects = Project::whereIn('status',[2,4])->where('start_date','>',$now)->orderBy('hitpoint', 'desc')->paginate(30);
		// 	else if($class == 'status2')
		// 		$projects = Project::whereIn('status',[2,4])->where('start_date','<=',$now)->orderBy('hitpoint', 'desc')->paginate(30);
		// 	else if($class == 'status3')
		// 		$projects = Project::whereIn('status',[3,5])->orderBy('hitpoint', 'desc')->paginate(30);
		// 	else if($class == 0)
		// 		$projects = Project::whereIn('status',[2,3,4])->orderBy('hitpoint', 'desc')->paginate(30);
		// 	else if($class <= 7 && $class >=1)
		// 		$projects = Project::where('class','=', $class)->whereIn('status',[2,3,4])->orderBy('hitpoint', 'desc')->paginate(30);

		// }

		return $this->filter_by_class($class)->sortBy($sort)->perPage(30)->getProjects();
	}


	public function filter_by_class($class){
		$now = Carbon::now();

		if($class == 'hot') 
			$projects = \App\Project::whereIn('status',[2,3,4])->where('hitpoint','>','100');
		else if($class == 'nonbegin')
			$projects = \App\Project::whereIn('status',[2,4])->where('start_date','>',$now);
		else if($class == 'status2')
			$projects = \App\Project::whereIn('status',[2,4])->where('start_date','<=',$now);
		else if($class == 'status3')
			$projects = \App\Project::whereIn('status',[3,5]);
		else if($class == 0)
			$projects = \App\Project::whereIn('status',[2,3,4]);
		else if($class <= 7 && $class >=1)
			$projects = \App\Project::where('class','=', $class)->whereIn('status',[2,3,4]);


		$this->projects = $projects;
			
		return $this;
	}

	public function sortBy($sort) {
		if($sort == 'a'){
			$this->projects = $this->projects->orderBy('created_at', 'desc');
		}
		elseif($sort == 'b'){
			$this->projects = $this->projects->orderBy('hitpoint','desc');
		}

		return $this;

	}

	public function perPage($number){
		$this->projects = $this->projects->paginate($number);

		return $this;
	}

	public function getProjects(){
		return $this->projects;
	}
}
