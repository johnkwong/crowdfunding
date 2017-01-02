<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use App\Starter;
//use Illuminate\Http\Request;
use Request;
use App\Http\Requests\StarterStoreRequest;
use Auth;
use App\User;
use Repositories\FBProjectRepositoryInterface;

class StarterController extends Controller {

	public function __construct(FBProjectRepositoryInterface $fbproject)
	{
		$this->middleware('auth');
		$this->middleware('user', ['only' => 'index']);
		$this->fbproject = $fbproject;
		//$this->middleware('creator', ['except' => ['index','show','create', 'store']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$user = User::find($id);
		$starter = Starter::where('user_id','=',$id);

		$project = $user->projects()->whereIn('status',[2,4])->get();
		$response = $this->fbproject->find($project);
		$project1 = $user->projects()->whereIn('status',[3,5])->get();
		$response1 = $this->fbproject->find($project1);

		return view('users.user_project',compact('starter','id','user','project','project1','response','response1'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$user = User::find(Auth::user()->id);
		//$starters = Auth::user()->id->starters();
		//if (is_null($starters)) {
		//	return redirect()->back();
		//}
		return view('starters.create',compact('user'));
		//return dd($user);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(StarterStoreRequest $request)
	{		
    	//Project::create($request->all());
    	//Starter::create($request->all());
    	$starter = new Starter($request->all());
    	Auth::user()->starters()->save($starter);

    	$project = new Project;
    	$project->status = 0;
    	$project->starter_id = $starter->id;

		$project->save();

		//Starter::find($starter->id)->projects()->save($project);

		$project_id = $project->id;
				
		$step = 1;
		$data = compact('project_id','step');
    	return redirect()->route('project.create',$data);
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
	public function edit($id)
	{
		$starter = Starter::find($id);
		if (is_null($starter)) {
			return redirect()->back();
		}
		return view('starters.edit',compact('starter'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,StarterStoreRequest $request)
	{
		$starter = Starter::findOrFail($id);
    	$starter->update($request->all());

		//$data = compact('starter');
    	//return redirect()->route('starter.edit',$data);
    	return redirect()->route('admin.project');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Starter::destroy($id);
		return redirect()->route('admin.project');
	}

	public function postChooseStarter(){
		
		$starter_id = Request::input('id');
    	$project = new Project;
    	$project->status = 0;
    	$project->starter_id = $starter_id;

		$project->save();

		//Starter::find($starter->id)->projects()->save($project);

		$project_id = $project->id;
				
		$step = 1;
		$data = compact('project_id','step');
		return redirect()->route('project.create',$data);
		//return dd($choose);

	}

}
