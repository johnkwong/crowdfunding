<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\FollowProject;
use App\Project;
use Auth;
use App\User;
use Repositories\FBProjectRepositoryInterface;

class FollowProjectController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct(FBProjectRepositoryInterface $fbproject)
	{
       $this->middleware('auth');
       $this->middleware('user', ['only' => 'index']);
       $this->fbproject = $fbproject;

	}
	
	public function index($id)
	{
		$follow = FollowProject::where('user_id',$id);

		$user = User::find($id);
		$project = $user->followrojects()->get();
		$response = $this->fbproject->find($project);
		return view('users.follow',compact('follow','id','project','response'));
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
	public function store($id)
	{
		if(Auth::user()== null)
			return view('auth.login');
		else{
		$project_id = $id;

		$followproject = new FollowProject;
    	$followproject->project_id = $project_id;
    	$followproject->user_id = Auth::user()->id;
		$followproject->save();
	    }

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
		FollowProject::destroy($id);

    	return redirect()->back();
	}

}
