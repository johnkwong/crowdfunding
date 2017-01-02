<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Socialize;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\AccountStoreRequest;
//use Socialize;

class UserController extends Controller {
	
	public function __construct()
	{
       $this->middleware('auth',['except' => ['facebook_redirect','facebook']]);
       $this->middleware('user',['except' => ['facebook_redirect','facebook']]);

	}

	public function editProfile ($id) {

		$user_id = $id;
		$user = User::find($user_id);
		$user_data = compact('user_id', 'user');
		return view('users.profile_edit', $user_data);

	}

	public function updateProfile ($id, UserStoreRequest $request) {

		$user = User::findOrFail($id);
		$user->birthday = $request->birthday;
		$user->gender = $request->gender;
		$user->country = $request->country;
		$user->city = $request->city;
		$user->info = $request->info;
		$user->facebook = $request->facebook;
		$user->youtube = $request->youtube;
		$user->website = $request->website;
		$user->save();
		return redirect()->route('user.profile.edit', $user->id);
	}

	public function editAccount($id){
		$per=User::find(Auth::user()->id);
		$user = User::findOrFail($id);
		$user_data = compact('user','per');
		return view('users.account_edit', $user_data);
	
	}

	public function updateAccount($id, AccountStoreRequest $request){
		
		$user = User::findOrFail($id);

		if((\Hash::check($request->current_password, $user->password)) || $request->admin){
		
		
		//$user->email = $request->email;
		$user->name = $request->name;
		$user->phone_no = $request->phone_no;
		$user->password = \Hash::make($request->newpassword);
		$user->permission = $request->permission;
		$user->save();	
		return redirect()->route('user.account.edit', $user->id);

		}elseif($request->current_password == '' && $request->newpassword == '' && $request->newpassword_confirmation == ''){
		
		//$user->email = $request->email;
		$user->name = $request->name;
		$user->phone_no = $request->phone_no;
		$user->permission = $request->permission;
		$user->save();
		return redirect()->route('user.account.edit', $user->id);
		
		}else{
			//	return dd($request->current_password);
			return \Redirect::back()->withErrors('當前的密碼輸入錯誤');
		}
		
	}
	public function facebook_redirect() {
		//$name = 's';
		\Session::flash('prevurl', \URL::previous());
	    return Socialize::with('facebook')->redirect();
	}
	// to get authenticate user data
	public function facebook() {
	  $user_fb = Socialize::with('facebook')->user();
	 //Check have any Facebook Account in database? yes , login
	  if (User::where('facebook_id', '=', $user_fb->id)->exists() || Auth::check()) {

		if(Auth::check()){
			$user_wefund = User::findOrFail(Auth::id());
		}else{
			$user_wefund = User::where('facebook_id', '=', $user_fb->id)->first();

		}
		  	$user_wefund->facebook_id = $user_fb->id;
			$user_wefund->avator = $user_fb->avatar;
			//$user_wefund->facebook = $user_fb->link;
			$user_wefund->save();

		if(!Auth::check()){
	  	//Auth::login($user_wefund->id);
	  	Auth::loginUsingId($user_wefund->id);
	  	}
	  	


	  }else{

	  	$user_wefund = new User;

	  	$user_wefund->name = $user_fb->name;
	  	$user_wefund->email =  $user_fb->email;
	  	$user_wefund->facebook_id = $user_fb->id;
		$user_wefund->avator = $user_fb->avatar;
		$user_wefund->save();
		//Auth::login($user_wefund->id);
		Auth::loginUsingId($user_wefund->id);

	  }
	  return redirect(\Session::get('prevurl'));
	  
	  //return redirect()->back();
	  //echo($user_fb->id);die;
	}

}
