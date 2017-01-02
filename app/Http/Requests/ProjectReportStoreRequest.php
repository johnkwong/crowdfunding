<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProjectReportStoreRequest extends Request {

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
			'report_title' => 'required|max:100',
			'report_content' => 'required',
		];
	}
	public function messages()
	{
	    return [
	    	/*'name.required'=>'請輸入姓名',
	    	'name.max:50'=>'姓名不能超過五十個字',
	    	'phone.required'=>'請輸入電話',
	    	'paymethod.required'=>'請確認付款方式',
	        'email.required' => '請輸入E-mail',
	        'email.email' => '請輸入正確格式的E-mail',
	        'title.required' => '請輸入標題',
	        'contents.required' => '請輸入內容',
	        'qanda_content.required'=>'請輸入內容',
	        'qanda_content.max:255'=>'內容不能超過255個字',*/
	        'report_title.required'=>'請輸入標題',
	        'report_title.max'=>'標題不能超過100個字',
	        'report_content.required'=>'請輸入內容',
	    ];
	}

}
