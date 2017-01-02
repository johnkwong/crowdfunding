<?php namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Suggestion;
class RedirectIfNotMySuggestion {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$suggestion=Suggestion::find($request->suggestion_id);
		if(Auth::user()->permission==2&&Auth::user()->id!=$suggestion->user_id){
			 return redirect()->back();
		}	
		return $next($request);
	}

}
