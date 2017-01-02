<?php namespace App\Http\Controllers;
use App\Project;
use App\Sponsor;
use Carbon\Carbon;
use App\Payment;
use Repositories\FBProjectRepositoryInterface;
use App\Http\Requests\ContactFormRequest;


class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */


	/**
	 * Show the application dashboard to the user.::all();
	 *
	 * @return Response
	 */
	public function __construct(FBProjectRepositoryInterface $fbproject)
	{

		$this->fbproject = $fbproject;
	}

	public function index()
	{   
		
		$sponsors = Sponsor::all();
		$projects = Project::where('status','2')->orderBy('hitpoint','desc')->take(4)->get();
		$projectslatest = Project::where('status','2')->orderBy('created_at', 'desc')->take(4)->get();
		$projects_done=Project::where('status','3')->orderBy('updated_at','desc')->take(4)->get();
		$projects_best=Project::where('status','4')->take(1)->get();
		$projects_new = Project::where('start_date','>=', Carbon::now())->where('status','2')->orderBy('start_date', 'asc')->take(4)->get();
		
		$response1 = $this->fbproject->find($projects);
		$response2 = $this->fbproject->find($projectslatest);
		$response3 = $this->fbproject->find($projects_done);
		$response4 = $this->fbproject->find($projects_best);
		$response5 = $this->fbproject->find($projects_new);

		//$projectshot = Payment::('amount')Project::orderBy('created_at', 'desc')->get();



		return view('main',compact('sponsors','projects','projectslatest','projects_new','projects_done','projects_best','response1', 'response2', 'response3', 'response4', 'response5'));
		//return dd($projects);
		//return Carbon::now();

	}
	public function about(){
    	return view('about');
	}

	public function contactus(){
    	return view('contactus');
	}
	public function send_mail(ContactFormRequest $request){

		$email_sender = $request->email;

	    \Mail::send('emails.contactus',
	        array(
	            'name' => $request->name,
	            'email' => $request->email,
	            'title' => $request->title,
	            'contents' => $request->contents,
	            'now' => \Carbon\Carbon::now()
	        ), function($message)
	    {
	        $message->from('fjuwefund@gmail.com');
	        $message->to('fjuwefund@gmail.com', 'Wefund Administrator')->subject('系統通知: 有使用者聯絡我們!');
	    });

    	return redirect()->back()->with('message3', '<div class="alert alert-success" >成功送出!</div>');


	}

	public function docsfaq(){
    	return view('docsfaq');
	}
	public function doc(){
    	return view('doc');
	}



}
