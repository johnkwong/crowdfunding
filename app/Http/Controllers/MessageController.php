<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\MessageStoreRequest;
use App\Message;
use App\User;
use Auth;
use Request;

class MessageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
		public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('user');
		$this->middleware('mymessage', ['only' => 'show']);
	}
	public function index($id)
	{
		$user = User::find($id);
	    $messages = Message::where('receiver_id','=',$user->id)->orderBy('created_at', 'desc');
	   	$users = User::all();  
		 return view('users.message',compact('id','messages','users','user'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
		   return view('admins.users.message',compact('id'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(MessageStoreRequest $request)
	{
		$user = User::find(Auth::user()->id);
		$id=$request->user_id;
		$message = new Message;
		$message->user_id = $user->id;
		$message->receiver_id=$id;
		$message->title=$request->title;
		$message->content=$request->content;		
		$message->save();
	    return redirect()->route('message.create',compact('id'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id,$mid)
	{
		$message = Message::find($mid);
		$user = User::where('id','=',$message->user_id);
		if ($message->ifread==0) {
			$message->ifread=1;
			$message->save();
		}
		

		 return view('users.message_content',compact('id','message','user'));

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
	public function destroy()
	{
		$user_id = Auth::id();
		$ids = \Input::all('selected_msg');

	    foreach($ids as $id) {
	    	Message::destroy($id);
	    }

		
		return redirect()->route('user.message', $user_id);
	}

}
