<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Request;

class AdminUserController extends Controller {

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
		$users = User::orderBy('id')->paginate(20);
                     	 		

    	$data = compact('users');                      	 		
	    return view('admins.user', $data);

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
    	$user = User::find($id);
    	if (is_null($user)) {
                    	return redirect()->back();
    	}
    	 $data = compact('user');
    	 return view('admins.users.show', $data);
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
			/*{
    	$user = User::find($id);
    	if (is_null($user)) {
                    	return redirect()->back();
    	}
    	 $data = compact('user');
    	 return view('admins.users.edit', $data);
    	 //return $data;
		}*/
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,UserStoreRequest $request)
	{
		/*$user = User::find($id);
	    $user->update($request->all());
	    //return dd($user);	
		return redirect()->route('admin.user.edit', $user->id);*/
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{	
        User::destroy($id);
    	return redirect()->route('admin.user');
	}

}
