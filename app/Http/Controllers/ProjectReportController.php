<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
//use Illuminate\Http\Request;
use App\ProjectReport;
use Request;
use App\Http\Requests\ProjectReportStoreRequest;

class ProjectReportController extends Controller {

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
	    return view('projects.show', $data);
	    //return dd($data);*/
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProjectReportStoreRequest $request)
	{
		$project_id = $request->hdd_project_id;

		$projectreport = new ProjectReport;
    	$projectreport->report_title = $request->report_title;
    	$projectreport->report_content = $request->report_content;
    	$projectreport->project_id = $project_id;
		$projectreport->save();


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
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		ProjectReport::destroy($id);

    	return redirect()->back();
	}

}
