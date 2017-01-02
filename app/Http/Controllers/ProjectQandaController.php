<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectQandaStoreRequest;
use App\ProjectQanda;
use Auth;
use App\Message;
use App\Starter;

class ProjectQandaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id, $step)
	{
		/*$project = Project::find($id);
		if (is_null($project)) {
			return redirect()->back();
		}
	 	$data = compact('project','step');
	    return view('projects.show', $data);*/
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProjectQandaStoreRequest $request)
	{
	
		$project_id = $request->hdd_project_id;
		$project = Project::find($project_id);
		
		$projectqanda = new ProjectQanda;
    	$projectqanda->qanda_content = $request->qanda_content;
    	$projectqanda->project_id = $project_id;
    	$projectqanda->user_id = Auth::user()->id;
		$projectqanda->save();

		$starter_id=$project->starter_id;
		$starter = Starter::find($starter_id);
		$receiver_id = $starter->user_id;

		$message = new Message;
		$message->user_id = Auth::user()->id;
		$message->receiver_id=$receiver_id;
		$message->title='項目收到回饋與問答';
		$message->content=$project->name.'收到回饋與問答！';		
		$message->save();
	    
		return redirect()->back();
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,ProjectQandaStoreRequest $request)
	{
		$projectqanda = ProjectQanda::findOrFail($id);
    	$projectqanda->update($request->all());
    	return redirect()->back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		ProjectQanda::destroy($id);

    	return redirect()->back();
	}

}
