<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use App\Project;
use Repositories\FBProjectRepositoryInterface;

class UpdateProjectStatus extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'projectstatus:update';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command description.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct(FBProjectRepositoryInterface $fbproject)
	{
		parent::__construct();
		$this->fbproject = $fbproject;
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		
		$projects = Project::where('end_date','<=',\Carbon\Carbon::now())->where('status','2')->get();
		$response = $this->fbproject->find($projects);
		//if($projects != null){
		foreach ($projects as $key => $project)
		{
				if($project->sponsor_projects()->first()!=null){
					if($project->payamount($project)+$response[$key]->like_count*10+$response[$key]->share_count*20 >= $project->pre_amount)
						$project->status = 3;
					else
						$project->status = 5;
				}else{
					if($project->payamount($project) >= $project->pre_amount)
						$project->status = 3;
					else
						$project->status = 5;
				}
				
					$project->save();		
		}

		//}

		\Log::info('Project Status Updated at '. \Carbon\Carbon::now());
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
			//['example', InputArgument::REQUIRED, 'An example argument.'],
		];
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [
			//['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
		];
	}

}
