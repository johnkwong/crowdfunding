<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
//use Request;
use App\Project;

class ProjectStoreRequest extends Request {

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
			'name' => 'required|max:16',
			'class' => 'required:max:1',
			'pre_amount' => 'required|numeric|min:5000|max:99999999',
			'outline' => 'required|max:255',
			'start_date' => 'required|date',
			'end_date' => 'required|date',
			'cover_img_path' => 'required|max:1024',
	];



	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{	
		$rules = $this->rules;
		if($this->has_img == '1'){
			$rules['cover_img_path'] = '';
		}


		if($this->step == 1){
			return $rules;
		}



		else if($this->step == 2)
		return [
			'video_link' => 'required|max:100',
			'content' => 'required',
		];
	}
	public function messages()
	{
	    return [
	    	'name.required'=>'請輸入項目名稱',
	    	'name.max'=>'項目名稱不能超過16個字',
	    	'class.required'=>'請選擇項目類別',
	    	'pre_amount.required'=>'請輸入預計募資金額',
	    	'pre_amount.numeric'=>'預計募資金額必須是數字',
	    	'pre_amount.min'=>'預計募資金額不能少於5000',
	    	'pre_amount.max'=>'預計募資金額不能超過99999999',
	    	'outline.required'=>'請輸入大綱內容',
	    	'outline.max'=>'大綱不能超過255個字',
	    	'start_date.required'=>'請選擇募資開始時間',
	    	'end_date.required'=>'請選擇募資結束時間',
	    	'cover_img_path.required'=>'請上傳項目封面',
	    	'cover_img_path.max'=>'項目封面大小不能超過1M',
	    	'video_link.required' =>'請填寫影片鏈接',
	    	'video_link.max' =>'影片鏈接不能超過100個字元',
	    	'content.required' =>'請填寫項目內容',
	        
	    ];
	}


}
