<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SuggestionStoreRequest;
use App\Http\Requests\MessageStoreRequest;
use App\Http\Requests\ProjectStoreRequest;
use App\Suggestion;
use App\User;
use App\Project;
use App\Message;
use Auth;
use Request;
use App\Starter;


class SuggestionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function __construct()
	{	
		$this->middleware('auth');
		$this->middleware('committee');
		$this->middleware('mysuggestion', ['only' => 'edit']);

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{	
		/*$user = User::find(Auth::user()->id);
		$project = Project::find($id);
		if (is_null($project)) {
			return redirect()->back();
		}
		return view('admins.projects.suggestions.create',compact('user','id','project'));*/

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{	
		$project = Project::find($id);
		$user = User::find(Auth::user()->id);
		$suggestion1 = Suggestion::where('project_id','=',$project->id)->count();
		if($suggestion1 == 0) {
		    //$id=Request::input('project_id');
			$suggestion = new Suggestion;
			$suggestion->project_id=$id;
			$suggestion->user_id = $user->id;
			$suggestion->save();	   
		}
		$suggestion2 = Suggestion::where('project_id','=',$project->id);
		$suggestion_id=$suggestion2->first()->id;
		$suggestion = Suggestion::find($suggestion_id);
		return redirect()->route('suggestion.edit',compact('user','suggestion_id','project','suggestion'));
		
	    	//return dd($suggestion_id);
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
	public function edit($suggestion_id)
	{
    	$suggestion = Suggestion::find($suggestion_id);
    	$project = Project::find($suggestion->project_id);
    	$user = User::find($suggestion->user_id);
    	if (is_null($suggestion)) {
                    	return redirect()->back();
    	}
    	//7-21

		$audit = User::where('permission','2')->lists('name', 'id');
		//7-21 end
    	$data = compact('user','suggestion_id','project','suggestion','audit');
		return view('admins.projects.feedback', $data);
		//return dd($audit);

	}



	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,SuggestionStoreRequest $request)
	{	
		$suggestion = Suggestion::find($id);
		$project = Project::find($suggestion->project_id);
		$suggestion1 = Suggestion::where('project_id','=',$project->id)->count();
		if($request->user_id != null)
			$suggestion->user_id = $request->user_id;
    	$suggestion->update($request->all());
    	
    	//$suggestion = Suggestion::find($id);
    	//return redirect()->route('suggestion.create',compact('user','suggestion_id','project','suggestion'));
    	//return dd($request->user_id);
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
            	/*Suggestion::destroy($id);
    	    	return redirect()->route('suggestions.index');*/
	}

	public function projectpass($id)
	{
		$project = Project::find($id);
    	$project->status = 2;
		$project->save();

	//send message		
		$user = User::find(Auth::user()->id);

		//改成user_id
		$starter_id=$project->starter_id;
		$starter = Starter::find($starter_id);
		$receiver_id = $starter->user_id;
		//$receiver_id=$project->starter_id;

		$message = new Message;
		$message->user_id = $user->id;
		$message->receiver_id=$receiver_id;
		$message->title='恭喜項目通過';
		$message->content='恭喜您，項目'.$project->name.'審查通過！';		
		$message->save();

		$users = User::where('permission',1);
 		foreach ($users->get() as $receiver) {
 			$message1 = new Message;
 			$message1->user_id =$user->id ;
			$message1->receiver_id=$receiver->id;
			$message1->title='項目'.$project->id.'審查通過';
			$message1->content='審查通過！';
			$message1->save();	
 		}

    	return redirect()->route('admin.project');
    	//return view('home');
    	//return dd($starter->toArray());
	}

	public function projectnotice($id)
	{
//update
		$suggestion = Suggestion::find($id);
	 	
//send message
    	$starter_info='項目簡介修改建議：'."\n".$suggestion->starter_info ;
    	$project_info='項目簡介修改建議：'."\n".$suggestion->project_info ;
    	$project_outline='項目大綱修改建議：'."\n".$suggestion->project_outline ;
    	$project_reward='回饋設置修改建議：'."\n".$suggestion->project_reward;
    	$data=$starter_info."\n\n".$project_info."\n\n".$project_outline."\n\n".$project_reward;

    	$project = Project::find($suggestion->project_id);

    	//改成user_id
    	$starter_id=$project->starter_id;
		$starter = Starter::find($starter_id);
		$receiver_id = $starter->user_id;
    	//$receiver_id=$project->starter_
    	$user = User::find(Auth::user()->id);
		
		$message = new Message;
		$message->user_id = $user->id;
		$message->receiver_id=$receiver_id;
		$message->title='項目'.$project->name.'審查結果';
		$message->content=$data;		
		$message->save();
 		
    	return redirect()->route('admin.project');  	
	}

	public function projectdownload($id){

		$project = Project::find($id);
		$starter=Starter::find($project->starter_id);
		$data = compact('project','starter');
        $view =  \View::make('pdf.index', $data)->render();
		$pdf = \App::make('dompdf.wrapper');
		$pdf->loadHTML($view)->setPaper('a4');
		//return $pdf->get_width();
		return $pdf->stream();

		
	}

}
