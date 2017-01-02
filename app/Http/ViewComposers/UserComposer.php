<?php
namespace App\Http\ViewComposers;


class UserComposer {
	public function compose(View $view){
		$view->with('accounts', \App\User::all());
	}

}
