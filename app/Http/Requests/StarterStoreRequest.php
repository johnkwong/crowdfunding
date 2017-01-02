<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class StarterStoreRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required|max:50',
			'id_no' => 'required|max:25',
			'email' => 'required|email|max:50',
			'phone_no' => 'required|min:8|max:20',
			'introduction' => 'required|max:1000'
		];
	}
	public function messages()
	{
	    return [
	    	'name.required'=>'請輸入發起者名稱',
	    	'name.max'=>'發起者名稱不能超過50個字',
	    	'id_no.required'=>'請輸入身分證字號',
	    	'id_no.max'=>'身分證字號不能超過25位',
	    	'email.required'=>'請輸入E-mail',
	    	'email.email'=>'請輸入正確格式的E-mail',
	    	'email.max'=>'Email不能超過50位',
	    	'phone_no.required'=>'請輸入電話號碼',
	    	'phone_no.min'=>'電話號碼不能少於8位',
	    	'phone_no.max'=>'電話號碼不能超過20位',
	    	'introduction.required'=>'請輸入發起者介紹',
	    	'introduction.max'=>'發起者介紹不能超過1000個字',
	        
	    ];
	}

}
