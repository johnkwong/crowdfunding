<?php namespace App\Http\Middleware;

use Closure;
use App\Project;
use Carbon\Carbon;

class RedirectIfProjectHasFinished {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$project = Project::find($request->pid);
     	if (($project->status != '2' && $project->status != '4') || $project->start_date >  Carbon::now())
     	{
             return redirect()->back();
     	}
		return $next($request);
	}

}
