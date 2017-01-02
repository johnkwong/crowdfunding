<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Auth;
use View;
class ComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{

        //$view->composer('*', 'App\Http\ViewComposers\GlobalComposer');
        //$view->composer('*', 'App\Http\ViewComposers\AdminComposer'); 
        //view()->share('avator_url', 'https://graph.facebook.com/v2.4/710788839026015/picture?type=normal');
	    //View::composer('*', function($view)
	    //{
	       // $view->with('current_user', '1');
	    //});
	    $this->UserComposer();

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{

	}
	public function UserComposer()
	{
		View::composer('layouts.header', 'App\Http\ViewComposers\UserComposer');
	}
}
