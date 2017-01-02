<?php namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class RedirectIfNotUser {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		
		if(Auth::user()->id!=$request->id &&Auth::user()->permission!=1){
			 return redirect()->back();
		}
		return $next($request);
	}

}
