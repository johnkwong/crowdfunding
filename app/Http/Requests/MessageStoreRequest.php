<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class MessageStoreRequest extends Request {

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
	    'title' => 'required|max:150',
	    'content' => 'required|max:500',
		];
	}
	public function messages()
	{
	    return [
	    	'title.required'=>'請輸入標題',
	        'title.max' => '標題最長150個字',
	        'content.required' => '請輸入內容',
	        'content.max' => '內容不能超過500個字',
	        
	    ];
	}

}
