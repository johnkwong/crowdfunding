<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Hash;

class AccountStoreRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	protected $rules = [
					'email' => 'email|max:50',
					'name' => 'required|max:50',
					'phone_no' => 'min:8|max:20',
					//'current_password' => 'required',
					//'newpassword' => 'required|confirmed', 
					//'newpassword_confirmation' => 'required|different:current_password'
	];

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		
		$rules = $this->rules;
		if($this->current_password != '' || $this->newpassword != '' || $this->newpassword_confirmation != ''){

			$rules['current_password'] = 'required|max:60';
			$rules['newpassword'] = 'required|confirmed|max:60';
			$rules['newpassword_confirmation'] = 'required|different:current_password|max:60';
		
		if($this->admin == '1'){
			$rules['current_password'] = 'max:60';
			$rules['newpassword_confirmation'] = 'required|max:60';
		}
		}
			return $rules;

		
	}
	public function messages()
	{
	    return [
	    	'name.required'=>'請輸入姓名',
	    	'name.max'=>'姓名不能超過50個字',
	    	//'phone.required'=>'請輸入電話',
	    	'phone_no.min'=>'電話號碼不能少於8位',
	    	'phone_no.max'=>'電話號碼不能多於20位',
	        //'email.required' => '請輸入E-mail',
	        'email.email' => '請輸入正確格式的E-mail',
	        'email.max' => 'Email不能超過50位',
	        'current_password.required'=>'請輸入密碼',
	        'current_password.max'=>'密碼不能超過60位',
	        'newpassword.required'=>'請輸入新密碼',
	        'newpassword.confirmed'=>'兩次輸入的新密碼不一致',
	        'newpassword.max'=>'新密碼不能超過60位',
	        'newpassword_confirmation.required'=>'請輸入確認新密碼',
	        'newpassword_confirmation.different:current_password'=>'新密碼不能和原密碼一樣',
	        'newpassword_confirmation.max'=>'確認新密碼不能超過60位',
	        
	    ];
	}




}
