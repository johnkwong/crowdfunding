<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SponsorStoreRequest extends Request {

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
		if($this->step == 1)
		{
			if($this->has_img == '1'){
				return [				
				'company_name'	=>	'required|max:50',
			];}
			else{
				return [		
				'company_name'	=>	'required|max:50',
				'logo_path'	=>	'required|max:1024',				
			];
			}
			
	   }
	   else if($this->step == 2)
		{
			return [		
			'amount'	=>	'required|numeric|min:3000|max:99999999',
			'messages'	=>	'required|max:500',
			'agree'	=>	'required',
			];
	   }
	}

	public function messages()
	{
	    return [
	    	'company_name.required'=>'請輸入公司名稱',
	    	'company_name.max'=>'公司名稱不能超過50個字',
	    	'logo_path.required'=>'請上傳logo圖片',
	    	'logo_path.max'=>'logo圖片大小不能超過1M',
	    	'amount.required'=>'請輸入贊助金額',
	    	'amount.numeric'=>'贊助金額必須是數字',
	    	'amount.min'=>'贊助金額不能少於3000',
	    	'amount.max'=>'贊助金額不能超過99999999',
	    	'messages.required'=>'請輸入對項目的建議',
	    	'messages.max'=>'對項目的建議不能超過500個字',
	    	'agree.required'=>'請勾選贊助商贊助契約書',
	        
	    ];
	}

}
