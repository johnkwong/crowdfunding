<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserStoreRequest extends Request {

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
		
	if(Request::is('user/profile/*')){

		return [
			
			'birthday' => 'date',
			'gender' => 'integer',
			'country' => 'string|max:25',
			'city' => 'string|max:25',
			'info' => 'string|max:500',
			'facebook' => 'string|url|max:150',
			'youtube' => 'string|url|max:150',
			'website' => 'string|url|max:150',

		];
	}

	}
	public function messages()
	{
	    return [
	    	'birthday.date'=>'請輸入日期格式',
	    	'gender.integer'=>'請輸入性別',
	    	'country.string'=>'請輸入正確國籍',
	    	'country.max'=>'國籍不能超過25個字',
	    	'city.string'=>'請輸入所在城市',
	    	'city.max'=>'城市不能超過25個字',
	    	'info.string'=>'請輸入自我介紹',
	    	'info.max'=>'自我介紹不能超過500個字',
	    	'facebook.string'=>'請輸入Facebook',
	    	'facebook.url'=>'請輸入符合URL格式的Facebook',
	    	'facebook.max'=>'Facebook不能超過150個字',
	    	'youtube.string'=>'請輸入Youtube',
	    	'youtube.url'=>'請輸入符合URL格式的Youtube',
	    	'youtube.max'=>'Youtube不能超過150個字',
	    	'website.string'=>'請輸入Website',
	    	'website.url'=>'請輸入符合URL格式的Website',
	    	'website.max'=>'Website不能超過150個字',

	        
	    ];
	}
}
