<?php namespace App\Http\Middleware;

use Closure;
use Auth;
class RedirectIfNotAdmin {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if(Auth::user()->permission!=1){
			 return redirect()->back();
		}
		return $next($request);
	}

}
