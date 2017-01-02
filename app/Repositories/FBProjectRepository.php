<?php
namespace Repositories;
 
use App\Project;
 
class FBProjectRepository implements FBProjectRepositoryInterface {
	/*
	public function selectAll()
	{
		return House::all();
	}
	*/
	public function find($projects)
	{
		//return House::find($project);
		$project_url = '';
		foreach ($projects as $projects_id) {
			//array_push($project_url, "http://".Request::root()."/projects/".$projects_id->id);
			$project_url .= "http://wefund.ga/projects/".$projects_id->id.",";
		}
		$facebook_api = 'https://api.facebook.com/method/links.getStats?urls='.$project_url.'&format=json';
		// 利用URL語法規定來傳輸文件和數據的工具
		// 有效地去抓網頁
		$ch = curl_init($facebook_api);
		// 為一個CURL會話設置選項
		// 我們並不想直接將獲得的內容直接的推送出去，而去希望先保存下來，然後在進行某些修改後再推送出去。
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //返回原生的（RAW）輸出
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$raw_response = curl_exec($ch);
		curl_close($ch);
		
		$response = json_decode($raw_response);

		return $response;
		//$project = Project::all();
		//$response = $project->facebook_api($projects)->first();

	}
}