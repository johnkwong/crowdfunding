@extends('layouts.admin')

@section('admin_content')

<div class="row" style="word-break:break-all;">
<div class="well container div_background">
    <legend>發起人資訊</legend> 	
		<div class="col-sm-12">
		{!! Form::label('starter_name', '申請人：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
			{{ $starter->name}}
		</div>
		</div>	
		<div class="col-sm-12">
		{!! Form::label('id_no', '身分證號碼：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
			{{ $starter->id_no }}
		</div>
		</div>	
		<div class="col-sm-12">
		{!! Form::label('email', 'Email：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
			{{ $starter->email }}
		</div>
		</div>	
		<div class="col-sm-12">
		{!! Form::label('phone_no', '聯絡電話：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
				{{ $starter->phone_no }}
		</div>	
		</div>	
		<div class="col-sm-12">
		{!! Form::label('introduction', '背景介紹：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
			 {!! nl2br(e($starter->introduction)) !!}
		</div>	
		</div>	
</div>




<div class="well container div_background">
    	<legend>項目簡介</legend> 
    	<div class="col-sm-12">
		{!! Form::label('project', '項目名稱：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;width:130px;')) !!}
		<div class="col-sm-10">
			{{ $project->name }}
		</div>	
		</div>
		<div class="col-sm-12">
		{!! Form::label('name', '項目類別：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;width:130px;')) !!}
		<div class="col-sm-10">
		@if($project->class == 1)社會人文
        @elseif($project->class == 2)科學技術 
        @elseif($project->class == 3)音樂影視
        @elseif($project->class == 4)設計繪畫
        @elseif($project->class == 5)舞台演出
        @elseif($project->class == 6)休閒娛樂
        @elseif($project->class == 7)主題旅行
        @endif
		</div>	
		</div>
		<div class="col-sm-12">
		{!! Form::label('pre_amount', '預計募資資金：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;width:130px;')) !!}
		<div class="col-sm-10">
			{{ $project->pre_amount}}
		</div>	
		</div>
		<div class="col-sm-12">
		{!! Form::label('outline', '項目摘要：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;width:130px;')) !!}
		<div class="col-sm-10">
			 {!! nl2br(e($project->outline)) !!}
		</div>	
		</div>
		<div class="col-sm-12">
		{!! Form::label('project', '募資開始時間：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;width:130px;')) !!}
		<div class="col-sm-10">
			{{ $project->start_date}}
		</div>	
		</div>
		<div class="col-sm-12">
		{!! Form::label('project', '募資結束時間：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;width:130px;')) !!}
		<div class="col-sm-10">
			{{ $project->end_date}}
		</div>	
		</div>
		<div class="col-sm-12">
		{!! Form::label('project', '項目封面：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;width:130px;')) !!}
		<div class="col-sm-10">
		 <img src="{{ $project->cover_img_path}}" style="width:150px;height:150px">
		</div>	
		</div>
</div>

<div class="well container div_background">
    <legend>項目大綱</legend> 	
		<div class="col-sm-12">
		{!! Form::label('outline', '影片鏈接：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
			<iframe width="600" height="360" style="margin-bottom:10px;"src="{{ $project->video_link}}" frameborder="0" allowfullscreen></iframe>
		</div>
		</div>	
		<div class="col-sm-12">
		{!! Form::label('outline', '項目內容：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
			 {!! nl2br(e($project->content)) !!}
		</div>
		</div>	
</div>

 
<div class="well container div_background">
    <legend>回饋設置</legend> 	
@foreach($project->project_rewards()->get() as $reward)  
    <div class="col-sm-4 thumbnail" style="width:31%;margin:10px 1.1666% 10px 1.1666%;">
    	<h4 style="padding-left:14px">回饋</h4>
		<div class="col-sm-12">
		{!! Form::label('reward_amount', '回饋金額：',array('class' => 'control-label col-sm-3','style' => 'padding: 1px;')) !!}
		<div class="col-sm-9">
			${{ $reward->reward_amount }}
		</div>
		</div>	
		<div class="col-sm-12">
		{!! Form::label('reward_img', '回饋圖片：',array('class' => 'control-label col-sm-3','style' => 'padding: 1px;')) !!}
		<div class="col-sm-9">
			@if($reward->reward_img!="")<img src="{{ $reward->reward_img}}" style="width:180px;height:180px;"></img>
			@else<p style="width:180px;height:180px;">無</p>@endif
		</div>
		</div>	
		<div class="col-sm-12">
		{!! Form::label('reward_introduction', '回饋描述：',array('class' => 'control-label col-sm-3','style' => 'padding: 1px;')) !!}
		<div class="col-sm-9">
		<p style="height:95px">	{{ $reward->reward_introduction}}</p>
		</div>
		</div>	
	</div>
 @endforeach 		
</div>
</div>	

@endsection
