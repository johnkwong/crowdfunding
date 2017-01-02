<?php namespace App\Http\Middleware;

use Closure;
use App\Project;
use Auth;

class RedirectIfNotStarter {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$project = Project::find($request->id);
		if (Auth::user()->projects()->where('projects.id',$project->id)->count()==0  && Auth::user()->permission!=1){
			 return redirect()->back();
		}
		return $next($request);
	}

}
