<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Request;
use App\Http\Requests\SponsorStoreRequest;
use App\SponsorProject;
use App\Project;
use App\Message;
use App\Starter;
use Auth;

class SponsorProjectController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
	public function store(SponsorStoreRequest $request)
	{

		$sponsorproject = new SponsorProject;
		$sponsorproject->amount = $request->amount;
		$sponsorproject->messages = $request->messages;
		$sponsorproject->project_id = $request->id;
		$sponsorproject->sponsor_id = $request->sponsorid;
		$sponsorproject->save();

		
		$project = Project::find($request->id);
		$starter_id=$project->starter_id;
		$starter = Starter::find($starter_id);
		$receiver_id = $starter->user_id;

		$message = new Message;
		$message->user_id = Auth::user()->id;
		$message->receiver_id=$receiver_id;
		$message->title='有贊助商贊助您的項目';
		$message->content='有贊助商贊助您的項目'.$project->name.'！'."\n".' 贊助金額為：$'.$request->amount."\n".' 對您說的話為：'."\n".$request->messages;		
		$message->save();

		$step = 1;
		$data = compact('project','step');
		return redirect()->route('project.show',$data);
		//return dd($request->sponsorid);
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

}
