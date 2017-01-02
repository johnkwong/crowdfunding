<?php namespace App\Http\Middleware;

use Closure;
use App\Project;
use Auth;

class RedirectIfProjectHasPass {

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
     	if ($project->status >= '2' && Auth::user()->permission!=1)
     	{
             return redirect()->back();
     	}
		return $next($request);
	}

}
