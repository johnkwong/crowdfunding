<?php namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {

	/**
	 * The application's global HTTP middleware stack.
	 *
	 * @var array
	 */
	protected $middleware = [
		'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
		'Illuminate\Cookie\Middleware\EncryptCookies',
		'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
		'Illuminate\Session\Middleware\StartSession',
		'Illuminate\View\Middleware\ShareErrorsFromSession',
		'App\Http\Middleware\VerifyCsrfToken',
	];

	/**
	 * The application's route middleware.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [
		'auth' => 'App\Http\Middleware\Authenticate',
		'auth.basic' => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
		'guest' => 'App\Http\Middleware\RedirectIfAuthenticated',
		'projectcreate' => 'App\Http\Middleware\RedirectIfProjectIsNotFinished',
		'payment' => 'App\Http\Middleware\RedirectIfProjectHasFinished',
		'sponsor' => 'App\Http\Middleware\RedirectIfProjectHasStarted',
		'starter' => 'App\Http\Middleware\RedirectIfNotStarter',
		'user' => 'App\Http\Middleware\RedirectIfNotUser',
		'admin' => 'App\Http\Middleware\RedirectIfNotAdmin',
		'committee' => 'App\Http\Middleware\RedirectIfNotCommittee',
		'mysuggestion' => 'App\Http\Middleware\RedirectIfNotMySuggestion',
		'projectedit' => 'App\Http\Middleware\RedirectIfProjectHasPass',
		'mymessage' => 'App\Http\Middleware\RedirectIfNotMyMessage',


	];

}
