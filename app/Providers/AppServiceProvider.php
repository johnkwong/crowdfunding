<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Auth;
use App\User;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//if(Auth::check()){
			//$user_temp = User::find(Auth::id());
			//$user_avator_url = $user_temp->avator;
			//view()->share('avator_url', $user_avator_url);
		/*
			if(Auth::check()){
			
			}else{
				$user = User::find(1);
				view()->share('avator_url', $user->name);
			}
*/
		//}

		//view()->share('avator_url', 'https://graph.facebook.com/v2.4/710788839026015/picture?type=normal');
		//View::share('current_user', User::find(Auth::id()));
	
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);



	}

}
