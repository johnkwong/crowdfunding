<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactFormRequest extends Request {

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
	    'email' => 'required|email|max:50',
	    'title' => 'required',
	    'contents' => 'required',
	  ];
	}

	public function messages()
	{
	    return [
	    	'name.required'=>'請輸入姓名',
	    	'name.max'=>'姓名不能超過50個字',
	        'email.required' => '請輸入E-mail',
	        'email.email' => '請輸入正確格式的E-mail',
	        'email.max' => 'E-mail不能超過50個字',
	        'title.required' => '請輸入標題',
	        'contents.required' => '請輸入內容',
	    ];
	}


}
