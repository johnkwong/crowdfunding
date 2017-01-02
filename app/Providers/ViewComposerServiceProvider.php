<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;
use Auth;
use Request;
use URL;
class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{





				view()->composer('*', function($view) {
				$view->with('myprofiledata', Auth::check() ? User::find(Auth::user()->id) : '');
				});

				view()->composer('layouts.header', function($view) {
				$view->with('avator_url', Auth::check() ? User::find(Auth::user()->id)->avator : '');
				});


				view()->composer('*', function($view) {
				$view->with('user_data', Auth::check() ? User::find(Request::segment(3)) : '');
				});

				view()->composer('*', function($view) {
				$view->with('like_value', 3);
				});
				
				view()->composer('*', function($view) {
				$view->with('like_value', 3);
				});

				//view()->composer('*', function($view) {
				//$view->with('facebook_api', json_decode(file_get_contents(Request::url()), false)[0]);
				//});


				//$json = file_get_contents(Request::url());
				//$obj = json_decode(file_get_contents(Request::url()));




				//view()->composer('layouts.header', function($view) {
				///$view->with('avator_url', Auth::check() ? User::find(Auth::user()->id)->permission : '');
				//});

			//isset(Auth::user()) ? "ok" : "null"

		
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
