<?php namespace App\Http\Middleware;

use Closure;
use App\Project;

class RedirectIfProjectIsNotFinished {

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
     	if ($project->name == '' || $project->content == '' || $project->project_rewards()->count()==0)
     	{
             return redirect()->back()->withErrors('還有未填寫的欄位');
     	}
		return $next($request);
	}

}
