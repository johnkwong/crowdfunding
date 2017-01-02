<?php namespace App\Http\Middleware;

use Closure;
use App\Message;
use Auth;
class RedirectIfNotMyMessage {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$message=Message::find($request->mid);
		if(Auth::user()->id!=$message->receiver_id){
			 return redirect()->back();
		}	
		return $next($request);
	}

}
