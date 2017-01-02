<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use App\Sponsor;
use App\Project;
use App\User;
use Auth;
use Request;
use App\Http\Requests\SponsorStoreRequest;
use Repositories\FBProjectRepositoryInterface;

class SponsorController extends Controller {

	public function __construct(FBProjectRepositoryInterface $fbproject)
	{
		$this->middleware('auth');
		$this->middleware('sponsor', ['only' => 'create']);
		$this->middleware('user', ['only' => 'index']);
		$this->fbproject = $fbproject;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$user = User::find($id);
		$sponosr = Sponsor::where('user_id','=',$id);

		$project = $user->sponsor()->get();

		$response = $this->fbproject->find($project);
		return view('users.project_sponsor',compact('sponosr','id','project','user','response'));
		//return dd($project->count());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id, $sponsorid, $step)
	{
		$user = User::find(Auth::user()->id);
		$project = Project::find($id);
		if (is_null($project)) {
			return redirect()->back();
		}
		//$sponsorid =0;
		return view('sponsors.create',compact('user','id','sponsorid' ,'step','project'));
		//return dd($sponsorid);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SponsorStoreRequest $request)
	{
		





		$user = User::find(Auth::user()->id);

		$id = $request->id;
		$project = Project::find($id);
		if (is_null($project)) {
			return redirect()->back();
		}	



		$sponsor = new Sponsor($request->all());
		Auth::user()->sponsors()->save($sponsor);

		if(\Input::hasFile('logo_path')) {
	    $file = \Input::file('logo_path');
	    $tmpFilePath = '/images/sponsorlogo/';
	    $tmpFileName = time() . '-' . $file->getClientOriginalName();
	    $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
	    $path = $tmpFilePath . $tmpFileName;
    	$sponsor->logo_path = $path;
    	$sponsor->save();
		}

		$sponsorid = $sponsor->id;		
		$step = 2;
		return redirect()->route('sponsor.create',compact('user','id', 'step','project','sponsorid'));
			//return dd($id);
	
		//else ($request->step == 2)
			//return redirect()->route('sponsor.create');
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
		//
	}

	public function store2()
	{
		
		$user = User::find(Auth::user()->id);

		$id = Request::input('id');
		$project = Project::find($id);
		if (is_null($project)) {
			return redirect()->back();
		}
		$sponsorid = Request::input('sponsor_id');
		$step = 2;
		return redirect()->route('sponsor.create',compact('user','id', 'step','project','sponsorid'));
		//return dd($sponsor_id);
	}

}
