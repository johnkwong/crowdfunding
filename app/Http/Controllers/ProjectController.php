<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use App\Starter;
use App\User;
use App\FollowProject;
use App\SponsorProject;
use App\Sponsor;
use App\Payment;
use App\Message;
use Auth;
//use Illuminate\Http\Request;
use Request;
use App\Http\Requests\ProjectStoreRequest;
use Carbon\Carbon;
use Repositories\FBProjectRepositoryInterface;
//use Repositories\ProjectInterface;

class ProjectController extends Controller {

	protected $project_repo;

	public function __construct(FBProjectRepositoryInterface $fbproject)
	{
		//$this->middleware('auth', ['except' => ['index','show']]);
		$this->middleware('auth', ['except' => ['index','show','search','showr']]);
		$this->middleware('projectcreate', ['only' => 'projectstatus']);
		$this->middleware('starter', ['only' => 'edit']);
		$this->middleware('projectedit', ['only' => 'edit']);
		$this->fbproject = $fbproject;
		//$this->project_repo = $proj_repo;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($class,$sort)
	{

		//$projects = $this->project_repo->get($class, $sort);

		$now = Carbon::now();
		if($sort == 'a'){
			if($class == 'hot')
				$projects = Project::whereIn('status',[2,3,4])->where('hitpoint','>','100')->orderBy('start_date', 'desc')->paginate(30);
			else if($class == 'nonbegin')
				$projects = Project::whereIn('status',[2,4])->where('start_date','>',$now)->orderBy('start_date', 'desc')->paginate(30);
			else if($class == 'status2')
				$projects = Project::whereIn('status',[2,4])->where('start_date','<=',$now)->orderBy('start_date', 'desc')->paginate(30);
			else if($class == 'status3')
				$projects = Project::whereIn('status',[3,5])->orderBy('start_date', 'desc')->paginate(30);
			else if($class == 0)
				$projects = Project::whereIn('status',[2,3,4])->orderBy('start_date', 'desc')->paginate(30);
			else if($class <= 7 && $class >=1)
				$projects = Project::where('class','=', $class)->whereIn('status',[2,3,4])->orderBy('start_date', 'desc')->paginate(30);

		}
		elseif($sort == 'b'){
			if($class == 'hot')
				$projects = Project::whereIn('status',[2,3,4])->where('hitpoint','>','100')->orderBy('hitpoint','desc')->paginate(30);
			else if($class == 'nonbegin')
				$projects = Project::whereIn('status',[2,4])->where('start_date','>',$now)->orderBy('hitpoint', 'desc')->paginate(30);
			else if($class == 'status2')
				$projects = Project::whereIn('status',[2,4])->where('start_date','<=',$now)->orderBy('hitpoint', 'desc')->paginate(30);
			else if($class == 'status3')
				$projects = Project::whereIn('status',[3,5])->orderBy('hitpoint', 'desc')->paginate(30);
			else if($class == 0)
				$projects = Project::whereIn('status',[2,3,4])->orderBy('hitpoint', 'desc')->paginate(30);
			else if($class <= 7 && $class >=1)
				$projects = Project::where('class','=', $class)->whereIn('status',[2,3,4])->orderBy('hitpoint', 'desc')->paginate(30);

		}

		/*$project_url = '';
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

		//$project = Project::all();
		//$response = $project->facebook_api($projects)->first();*/


	
		
		$project = Project::all();
		$response = $this->fbproject->find($projects);
		$data = compact('projects','sort','class','response','project');

		//return dd($fbproject);

    	return view('projects.index', $data);


    	//return dd($response);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id, $step)
	{

		$project = Project::find($id);
		if (is_null($project)) {
			return redirect()->back();
		}
		return view('projects.create',compact('id', 'step','project'));
		//return view('projects.create')->with('step', $step);
	}

	/**$
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		/*$input = Request::all();
    	Project::create($input);
    	return "";*/
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id, $step)
	{
		$project = Project::find($id);
		$starter = Starter::where('id',$project->starter_id)->first()->name;
		//
		if($project->sponsor_projects()->count() != 0){
			$sponsor_project = SponsorProject::where('project_id',$project->id)->first()->sponsor_id;
			$sponsor = Sponsor::where('id',$sponsor_project)->first();
		}

		//fb
		$likecount = $project->getLikeCount($id);
		$sharecount = $project->getShareCount($id);
		$fbamount = $likecount*10+$sharecount*20;
		//date
		$start_date = new Carbon($project->start_date);
		$end_date = new Carbon($project->end_date);
		$now = Carbon::now();
		
		$project->hitpoint = $project->hitpoint+1;
		$project->save();

		//$hitpoint=$hitpoint+1;

		if($start_date > $now)
			$difference = '----';
		else{
			if($end_date < $now)
				$difference = 0;
			else
				$difference = $end_date->diff($start_date)->days;
		}
		

	    if($project->payments()->count() != 0){
	    	$paymanr = Payment::where('project_id',$id);
	    	$count = $paymanr->count();
			$amount = $paymanr->sum('amount');
		}
		else{
			$count = 0;
			$amount = 0;
		}	

		if($project->sponsor_projects()->first() != null)
			$amount+=$fbamount;
		//$project_follower = FollowProject::where('project_id', ' = ', 14)->where('user_id', '=', 1);


		if (is_null($project)) {
			return redirect()->back();
		}
		if(Auth::user() == null)
			$data = compact('project','step','starter','sponsor','count','amount','difference','now','fbamount', 'likecount', 'sharecount');	
		else{
			$user = User::find(Auth::user()->id);

		    $project_id = $id;
	   		$user_id = Auth::user()->id;
		    $project_follower = FollowProject::where(function ($query) use ($project_id, $user_id) {
				$query->where('project_id', $project_id);
				$query->where('user_id', $user_id);
		})->get()->count();
			$data = compact('project','starter','step','project_follower','user','sponsor','count','amount','difference','now','fbamount', 'likecount', 'sharecount');
		}
		//return 	$project_follower->get();



		//update status
		/*$total = $amount+$fbamount;
		if($total >= $project->pre_amount){
			$project->status = 3;
    		$project->save();
		}*/


		//return dd($likecount);

	    return view('projects.show', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id,$step)
	{
		$project = Project::find($id);
		if (is_null($project)) {
			return redirect()->back();
		}
		return view('projects.edit',compact('id', 'step','project'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,ProjectStoreRequest $request)
	{


		$project = Project::findOrFail($id);
    	$project->update($request->all());

		if(\Input::hasFile('cover_img_path')) {
	    $file = \Input::file('cover_img_path');
	    $tmpFilePath = '/images/project/';
	    $tmpFileName = time() . '-' . $file->getClientOriginalName();
	    $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
	    $path = $tmpFilePath . $tmpFileName;
    	$project->cover_img_path = $path;
    	$project->save();
		}
		
    	$project_id = $project->id;
		$projectstep = $request->step + 1;
		$projectstepupdate = $request->step;
		$project_data = compact('project_id','projectstep','project');
		$project_dataupdate = compact('project_id','projectstepupdate','project');

		if($request->update !=null){
		   /* $step = 1;
			$data = compact('project','step');
			//return redirect()->route('project.edit',$project_dataupdate);
			return redirect()->route('project.show',$data);*/
			if($project->status==1 && $project->suggestions()->count()!=0){
				$message = new Message;
				$message->user_id = Auth::user()->id;
				$message->receiver_id=$project->suggestions()->first()->user_id;
				$message->title='您審查的項目已修改';
				$message->content='項目編號'.$project_id.'已修改';	
				$message->save();
			}
			return redirect()->back();
		}
		if($projectstep < 3)
    		return redirect()->route('project.create',$project_data);
    	else
    		return redirect()->route('projectreward.create',$project_data);
    	//return dd($project_data);

    	


	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function projectstatus($id)
	{	
		$project = Project::findOrFail($id);

		if($project->status < 1 ){
			$project1 = Project::findOrFail($id);
    		$project1->status = 1;
    		$project1->save();
    	}

    	//$project = Project::findOrFail($id);

		$step = 1;    
		$data = compact('project','step');

    	return redirect()->route('project.show',$data);
    	//return view('home');
    	//return dd($starter->toArray());
	}

	public function search()

	{  
		$name= Request::input('search');
		$projects=Project::where('name', 'LIKE', '%'.$name.'%')->whereIn('status',[2,3,4])->get();
		$response = $this->fbproject->find($projects);
		return view('search',compact('projects', 'response'));


	}

	public function showr($id){
		
		return redirect('projects/'.$id.'/1');
	}


	

}
