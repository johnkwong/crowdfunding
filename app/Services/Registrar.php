<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{

		$messages = array(
		    'name.required'    => '請輸入姓名',
		    'name.max'    => '姓名不能超過50個字',
		    'email.required'    => '請輸入E-mail',
		    'email.email'    => '請輸入正確E-mail格式',
		    'email.max'    => 'E-mail不能超過50個字',
		    'email.unique'    => 'E-mail已存在',
		    'password.required' => '請輸入密碼',
		    'password.confirmed' => '確認密碼錯誤',
		    'password.min' => '密碼最少6個字',
		);



		return Validator::make($data, [
			'name' => 'required|max:50',
			'email' => 'required|email|max:50|unique:users',
			'password' => 'required|confirmed|min:6',
		], $messages);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
	}

}
