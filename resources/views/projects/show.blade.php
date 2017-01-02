@extends('layouts.project')

@section('project_content')


			@if($step == 1)
			<h1>關於這個項目 
			@if(Auth::user())
			@if(($user->projects()->where('projects.id',$project->id)->count()!=0 && $project->status<=1) || $myprofiledata->permission == 1)
			<a href="/project/edit/{{ $project->id }}/1" href="#" data-toggle="tooltip" title="編輯">
				 <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
			</a>
			@endif
		
			@endif</h1> 
			<p style="word-break:break-all;">
			 <font size=4>{!! nl2br(e($project->content)) !!}</font>
			</p>
			
			<br>
			@endif



			@if($step == 2)
			<h1>項目進度</h1>

			@if(Auth::user())

			@if($user->projects()->where('projects.id',$project->id)->count()!=0 || $myprofiledata->permission == 1)
			@include('errors.storestarter')
			{!! Form::open(['method' => 'POST', 'route' => 'projectreport.store','class' => 'form-horizontal']) !!}
			{!! Form::hidden('hdd_project_id', $project->id ) !!}
			<div class="form-group">
			<div class="col-md-2 column">	
			{!! Form::label('report_title', '進度標題：',array('class' => 'control-label')) !!}
			</div>
			<div class="col-md-10 column">
			{!! Form::text('report_title', null,array('class' => 'form-control','placeholder'=>'輸入進度標題')) !!}
			</div>
			</div>
			<div class="form-group">
			<div class="col-md-2 column">	
			{!! Form::label('report_content', '進度內容：',array('class' => 'control-label')) !!}
			</div>	
			<div class="col-md-10 column">
				{!! Form::textarea('report_content',null,array('class' => 'form-control','placeholder'=>'輸入項目進度')) !!} 
			</div>
			</div>
			<div class="form-group" style="padding-right:15px;">
				{!! Form::submit('送出',array('class' => 'btn btn-primary col-sm-offset-11')) !!}
			</div>
			{!! Form::close() !!}
			@endif
		
			@endif

	 @foreach($project->project_reports()->get() as $report)		
		<div class="well col-md-12 project_border div_background" style="word-break:break-all;">	
		@if(Auth::user())
		@if($user->projects()->where('projects.id',$project->id)->count()!=0 || $myprofiledata->permission == 1)
			<a class=" pull-right" href="{{ route('projectreport.destroy', $report->id) }}" data-toggle="tooltip" title="刪除">
				 <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
			</a>
		@endif	
		@endif
			<legend>{{ $report->report_title }}</legend>
				<p class="help-block">進度更新{{ $report->created_at }}</p>
				 {!! nl2br(e($report->report_content)) !!}
				
		</div>
	@endforeach 	
			@endif

			@if($step == 3)
			<h1>回饋與問答</h1>

		
			@if(Auth::check())
			@include('errors.storestarter')
			{!! Form::open(['method' => 'POST', 'route' => 'projectqanda.store','class' => 'form-horizontal']) !!}
			{!! Form::hidden('hdd_project_id', $project->id ) !!}
			<div class="col-sm-12 ">
			<div class="form-group">
				{!! Form::textarea('qanda_content',null,array('class' => 'form-control','placeholder'=>'輸入回饋或問答')) !!} 
			</div>
			<div class="form-group">
				{!! Form::submit('送出',array('class' => 'btn btn-primary pull-right')) !!}
			</div>
			</div>
			{!! Form::close() !!}
			@else
			<h3><center>登入後進行回饋與問答 [<a data-toggle="modal" data-target="#myModal">登入</a>]</center></h3>

			@endif
		
			@foreach($project->project_qandas()->get() as $qanda)
			<div class="col-sm-12 thumbnail project_border div_background" style="word-break:break-all; padding-top:20px;">
			@if(Auth::check())
			@if($myprofiledata->permission == 1)
			<a href="{{ route('projectqanda.destroy', $qanda->id) }}" style="pull-right" href="#" data-toggle="tooltip" title="刪除">
				 <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
			</a>
			@endif
			@endif
				<div class="col-sm-3" style="width:100px;height:100px;margin-right:20px;">
					<img src="@if($qanda->user()->first()->avator == ''){!! asset('images/dafault/profile_picture.png') !!}@else{{ $qanda->user()->first()->avator }}@endif" style="width:100px;height:100px;">
				</div>
				<div class="col-sm-9" style="height:20px;">
					{{ $qanda->user()->first()->name }}
				</div><hr>
				<div class="col-sm-9" style="height:80px;">
				{!! nl2br(e($qanda->qanda_content)) !!}
				</div>	
				@if($qanda->qanda_answer!='')
				<div class="thumbnail col-md-12 project_border">
					<legend>回覆</legend>
					{!! nl2br(e($qanda->qanda_answer)) !!}
				</div>	
				@endif
				<div class="col-sm-12">
			@if(Auth::user())

			@if($user->projects()->where('projects.id',$project->id)->count()!=0 || $myprofiledata->permission == 1)
					{!! Form::model($qanda, ['route' => ['projectqanda.update', $qanda->id], 'method' => 'PATCH']) !!}
					<div class="form-group">
						{!! Form::textarea('qanda_answer',null,array('class' => 'form-control','placeholder'=>'回應')) !!} 
					</div>
					<div class="form-group">
					{!! Form::submit('送出',array('class' => 'btn btn-primary col-sm-offset-11')) !!}
				</div>
					{!! Form::close() !!}
			@endif
	
			@endif
				</div>	
			</div>	
			@endforeach			
			@endif

			@if($step == 4)
			<h1>贊助名單</h1><p>

		
		
		     @foreach($project->payments()->groupby('user_id')->get() as $payment)
		     <div class="col-sm-2 well" style="margin: 5px 1.6% 5px 1.6%;">
					<img class="img-circle special-img" src="@if($payment->user()->first()->avator == ''){!! asset('images/dafault/profile_picture.png') !!}@else{{ $payment->user()->first()->avator }}@endif" style="width:80px;height:80px;"><br><br>
				
		    <center> {{ substr_replace($payment->user()->first()->name,"O",6) }}</center>
		   </div>
		    @endforeach
		
			
			@endif
@endsection
