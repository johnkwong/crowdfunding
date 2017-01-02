<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use App\ProjectReward;
//use Illuminate\Http\Request;
use Request;
use App\Http\Requests\ProjectRewardStoreRequest;

class ProjectRewardController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('starter', ['only' => 'edit']);
	}

	public function index()
	{
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id, $step)
	{
		$project = Project::find($id);
		//$project = ProjectReward::find($project->);
		if (is_null($project)) {
			return redirect()->back();
		}

		return view('projects.create',compact('id', 'step','project'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProjectRewardStoreRequest $request)
	{
		//ProjectReward::create($request->all());
		$project_id = $request->hdd_project_id;

		$projectreward = new ProjectReward;
    	$projectreward->reward_amount = $request->reward_amount;
    	//$projectreward->reward_img = $request->reward_img;
    	$projectreward->reward_introduction = $request->reward_introduction;
    	$projectreward->project_id = $project_id;
		$projectreward->save();

		if(\Input::hasFile('reward_img')) {
	    $file = \Input::file('reward_img');
	    $tmpFilePath = '/images/reward/';
	    $tmpFileName = time() . '-' . $file->getClientOriginalName();
	    $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
	    $path = $tmpFilePath . $tmpFileName;
    	$projectreward->reward_img = $path;
    	$projectreward->save();
		}


		$step = 3;
		$data = compact('project_id','step');

    	if($request->update !=null)
			return redirect()->route('projectreward.edit',$data);
		else
    		return redirect()->route('projectreward.create',$data);
    	//return dd($data);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
	public function update($id,ProjectRewardStoreRequest $request)
	{
		$project_id = Request::input('hdd_project_id');
		$projectreward_id = Request::input('hdd_projectreward_id');

		$projectreward = ProjectReward::findOrFail($projectreward_id);
    	$projectreward->update($request->all());

		if(\Input::hasFile('reward_img')) {
	    $file = \Input::file('reward_img');
	    $tmpFilePath = '/images/reward/';
	    $tmpFileName = time() . '-' . $file->getClientOriginalName();
	    $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
	    $path = $tmpFilePath . $tmpFileName;
    	$projectreward->reward_img = $path;
    	$projectreward->save();
		}


		$step = 3;
		$data = compact('project_id','step');

		if($request->update !=null)
			return redirect()->route('projectreward.edit',$data);
		else
    		return redirect()->route('projectreward.create',$data);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		ProjectReward::destroy($id);

    	return redirect()->back();
	}

}
