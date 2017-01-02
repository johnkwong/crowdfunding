<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SuggestionStoreRequest extends Request {

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
	    'starter_info' => 'max:500',
	    'project_info' => 'max:500',
	    'project_outline' => 'max:500',
	    'project_reward' => 'max:500',
		];
	}
	public function messages()
	{
	    return [
	    	'starter_info.max'=>'發起人資訊審查建議不超過500字',
	    	'project_info.max'=>'項目簡介審查建議不超過500字',
	    	'project_outline.max'=>'項目大綱審查建議不超過500字',
	    	'project_reward.max'=>'回饋設置審查建議不超過500字',
	        
	    ];
	}

}
