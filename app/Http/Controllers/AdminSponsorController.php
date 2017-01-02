<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SponsorStoreRequest;
use App\Sponsor;
use App\Project;
use App\SponsorProject;
use Auth;
use Request;

class AdminSponsorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('auth');
	    $this->middleware('admin');

	}
	public function index()
	{	
		$sponsors = Sponsor::orderBy('id')->paginate(20);
    	$sponsor_projects = SponsorProject::all();
    	$data = compact('sponsors','sponsor_projects');                      	 		
	    return view('admins.sponsor', $data);
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
    	$sponsor = Sponsor::find($id);
    	if (is_null($sponsor)) {
                    	return redirect()->back();
    	}

    	$sponsor_projects = SponsorProject::find($id);

    	$count = $sponsor->sponsor_projects()->count();
		$sum = $sponsor->sponsor_projects()->sum('amount');
    	$project=Project::all();    	
        $data = compact('sponsor','sponsor_projects','project','count','sum');
    	return view('admins.sponsors.show', $data);
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
			{
    	$sponsor = Sponsor::find($id);
    	if (is_null($sponsor)) {
                    	return redirect()->back();
    	}
    	 $data = compact('sponsor');
    	 return view('admins.sponsors.edit', $data);
    	 //return $data;
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,SponsorStoreRequest $request)
	{
		$sponsor = Sponsor::find($id);
	    $sponsor->update($request->all());
	    //return dd($sponsor);	

		if(\Input::hasFile('logo_path')) {
	    $file = \Input::file('logo_path');
	    $tmpFilePath = '/images/sponsorlogo/';
	    $tmpFileName = time() . '-' . $file->getClientOriginalName();
	    $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
	    $path = $tmpFilePath . $tmpFileName;
    	$sponsor->logo_path = $path;
    	$sponsor->save();
		}

	    
		return redirect()->route('admin.sponsor');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{	
        Sponsor::destroy($id);
    	return redirect()->route('admin.sponsor');
	}

}
