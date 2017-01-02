<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PaymantStoreRequest extends Request {

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
		if($this->step == 1){
		return [
			'name' => 'required|max:50',
			'phone' => 'required|min:8|max:20',
			'paymethod' => 'required',
		];
	  }
	}

	public function messages()
	{
	    return [
	    	'name.required'=>'請輸入姓名',
	    	'name.max'=>'姓名不能超過50個字',
	    	'phone.required'=>'請輸入電話',
	    	'phone.max'=>'電話不能超過20個字',
	    	'phone.min'=>'電話不能少於8個字',
	    	'paymethod.required'=>'請選擇付款方式',
	        /*'email.required' => '請輸入E-mail',
	        'email.email' => '請輸入正確格式的E-mail',
	        'title.required' => '請輸入標題',
	        'contents.required' => '請輸入內容',*/
	    ];
	}

}
