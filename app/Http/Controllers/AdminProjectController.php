<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectStoreRequest;
use App\Project;
use App\Starter;
use App\Payment;
use App\SponsorProject;
use Auth;
use Request;
use App\User;
use Repositories\FBProjectRepositoryInterface;

class AdminProjectController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct(FBProjectRepositoryInterface $fbproject)
	{
		$this->middleware('auth');
		$this->middleware('committee', ['only' => ['index','show']]);
		$this->middleware('admin', ['except' => ['index','show']]);
		$this->fbproject = $fbproject;	

	}
	public function index($status)
	{	
		if($status != 0 && $status != 1 && $status != 2 && $status != 3 && $status != 4 && $status != 5 || is_numeric($status)!=true) 
     		$status = 6;
		if($status<6)
			$projects = Project::where('status',$status)->orderBy('id')->paginate(20);
		else 	
			$projects = Project::orderBy('id')->paginate(20);
		$starter = Starter::all(); 
	    $projects2 = Project::where('status','1')->orderBy('id')->paginate(20);  
     	
     	$response = $this->fbproject->find($projects);

    	$data = compact('projects','starter','projects2','status','response'); 
		
		  return view('admins.project', $data);
		  //return dd($user->suggestions()->where->count());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		{
    	$project = Project::find($id);
    	if (is_null($project)) {
             return redirect()->back();
    	}
    	$starter=Starter::find($project->starter_id);
    	$data = compact('project','starter');
    	 return view('admins.projects.show', $data);
		}

	
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		/*	{
    	$project = Project::find($id);
    	if (is_null($project)) {
                    	return redirect()->back();
    	}
    	 $data = compact('project');
    	 return view('admins.projects.edit', $data);
    	 //return $data;
		}*/
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,ProjectStoreRequest $request)
	{
		/*$project = Project::find($id);
	    $project->update($request->all());
	    //return dd($project);	
		return redirect()->route('admin.project.edit', $project->id);*/
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{	
        Project::destroy($id);
    	return redirect()->back();
	}

	public function collection($id)
	{	
		
		$project1=Project::where('status','4')->first();
		$project2=Project::where('status','4');
		$project = Project::find($id);

		if($project->status==2){	
	       	$project->status = 4;       
			$project->save();
			if(is_null($project1)==false){
				$project1->status = 2;
				$project1->save();	       
			}

		}
    	return redirect()->back();

	}

}
