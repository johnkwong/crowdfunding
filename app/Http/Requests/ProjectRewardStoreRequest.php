<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProjectRewardStoreRequest extends Request {

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
			'reward_amount' => 'required|numeric|max:99999999',
			'reward_img' => 'max:1024',
			'reward_introduction' => 'required|max:50',
	];


	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$rules = $this->rules;

		/*if($this->update2 != null){
			$rules['reward_img'] = '';
		}*/
		return $rules;
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
	        'qanda_content.max:255'=>'內容不能超過255個字',
	        'report_title.required'=>'請輸入標題',
	        'report_title.max:25'=>'標題不能超過25個字',
	        'report_content.required'=>'請輸入內容',*/
	        'reward_amount.required'=>'請輸入回饋金額',
	        'reward_amount.max'=>'金額不能超過99999999',
	        'reward_amount.numeric'=>'回饋金額必須是數字',
	        //'reward_img.required'=>'請上傳回饋的圖片',
	        'reward_img.max'=>'圖片大小不能超過1M',
	        'reward_introduction.required'=>'請輸入回饋介紹',
	        'reward_introduction.max'=>'回饋介紹不能超過50個字',
	        
	    ];
	}

}
