<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use App\ProjectReward;
//use Illuminate\Http\Request;
use Request;
use App\Http\Requests\PaymantStoreRequest;
use Session;
use App\Payment;
use App\SponsorProject;
use Auth;

class PaymentController extends Controller {

	public function __construct()
	{
       $this->middleware('auth');
       $this->middleware('payment',['except' => ['index']]);
       $this->middleware('user', ['only' => 'index']);

	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$payment = Payment::where('user_id','=',$id);
		$project = Project::all();
		return view('users.sponsor',compact('payment','project'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($pid,$rid)
	{
		$project = Project::find($pid);
		if (is_null($project)) {
			return redirect()->back();
		}
		$reward = ProjectReward::find($rid)->reward_amount;
			$amount = 0;

		return view('payments.create',compact('pid','rid','project','amount','reward'));
		//return dd($amount);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PaymantStoreRequest $request)
	{
		$pid = $request->pid;
		$rid = $request->rid;

		$project = Project::find($pid);
		if (is_null($project)) {
			return redirect()->back();
		}
		$reward_amount = ProjectReward::find($rid)->reward_amount;
		$amount = $request->extrapay;
		$totalamount = $reward_amount+$amount;
		Session::put('totalamount',$totalamount);

		$reward = ProjectReward::find($rid);

		$name = $request->name;
		Session::put('name',$name);
		$phone = $request->phone;
		Session::put('phone',$phone);
		$paymethod = $request->paymethod;
		Session::put('paymethod',$paymethod);
		//return dd($pid);
		return redirect()->route('payment.create2',compact('pid','rid','project','totalamount','reward','name','phone','paymethod'));
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
	public function create2($pid,$rid)
	{
		
		$project = Project::find($pid);
		if (is_null($project)) {
			return redirect()->back();
		}
		$reward = ProjectReward::find($rid);

		$name = Session::get('name');
		$totalamount = Session::get('totalamount');
		$phone = Session::get('phone');
		$paymethod = Session::get('paymethod');

		return view('payments.check',compact('pid','rid','project','totalamount','reward','name','phone','paymethod'));
	}

	public function store2($pid)
	{
		$paymant = new Payment;
    	$paymant->amount = Session::get('totalamount');
    	$paymant->type = Session::get('paymethod');
    	$paymant->project_id = $pid;
    	$paymant->user_id = Auth::user()->id;
		$paymant->save();

		//update status
		$project = Project::find($pid);
		if($project->sponsor_projects()->count() != 0){
			$sponsor_project_amount = SponsorProject::where('project_id',$project->id)->first();
			$sponsor_amount = $sponsor_project_amount->amount;
	    }
	    else
	    	$sponsor_amount = 0;

	    $paymanr = Payment::where('project_id',$pid);
		$amount = $paymanr->sum('amount')+$sponsor_amount;

		/*if($amount >= $project->pre_amount)
		{
			$project1 = Project::findOrFail($pid);
    		$project1->status = 3;
    		$project1->save();
		}*/

		$step = 1;
		$data = compact('project','step');
		if($paymant->type==0)
			return \Redirect::to('http://wefund.lionfree.net');
		else
			return \Redirect::to('https://auth.alipay.com/login/index.htm');


		
	}
}
