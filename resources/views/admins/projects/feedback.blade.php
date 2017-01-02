@extends('layouts.admin')

@section('admin_content')

<div class="row">
	<div class="container">
			<a class="btn btn-primary pull-right" href="{{ route('project.download', $project->id) }}">下載項目資料</a>
	</div>	

{!! Form::model($suggestion, ['route' => ['suggestion.update', $suggestion->id], 'method' => 'PATCH']) !!}


<div class="well container div_background">
	<fieldset>
    	<legend>審查建議表</legend> 
    <div>	
   @if($myprofiledata->permission == '1')
   <div class="form-group col-sm-12" style="padding-left:6px;">
		{!! Form::label('user_id', '審查人員：',array('class' => ' col-sm-1','style' => 'padding: 2px;')) !!}
		<div class="col-sm-2" style="padding-left:6px;">
			{!! Form::select('user_id',$audit, null, ['class' => 'form-control']) !!} 
		</div>	
	</div>

	@endif
		<div class="form-group">
			{!! Form::label('projectid', '項目編號：',array('class' => ' col-sm-1','style' => 'padding: 8px;')) !!}
			<div class="col-sm-3">
				<h5>{{ $project->id }}</h5> </p>
			</div>	
		</div>
		<div class="form-group">
			{!! Form::label('reviewer', '審查人員：',array('class' => ' col-sm-1','style' => 'padding: 8px;')) !!}
			<div class="col-sm-3">
				<h5>{{ $user->name }}</h5> </p>					
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('reviewer', '審查日期：',array('class' => 'col-sm-1','style' => 'padding: 8px;')) !!}
			<div class="col-sm-3">
				<h5>{{ $suggestion->updated_at }}</h5> </p>
			</div>	
		</div>
	</div>
	<br><br><br><br>
	
			<legend>發起人資訊</legend>	 
	@include('errors.storestarter')		
	<div class="form-group">
		{!! Form::label('starter_info', '修改建議：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
				@if($myprofiledata->permission == 1)
				{!! Form::textarea('starter_info',null,array('class' => 'form-control','disabled')) !!}
				@else
				{!! Form::textarea('starter_info',null,array('class' => 'form-control')) !!} 
				@endif
				</p >
		</div>  
	</div>
	<br><br>
			<legend>項目簡介</legend>
	<div class="form-group">
		{!! Form::label('project_info', '修改建議：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
		@if($myprofiledata->permission == 1)
			{!! Form::textarea('project_info',null,array('class' => 'form-control','disabled')) !!} 
		@else
			{!! Form::textarea('project_info',null,array('class' => 'form-control')) !!} 
		@endif
		</p >
		</div>
	</div>
			<legend>項目大綱</legend>
	<div class="form-group">
		{!! Form::label('project_outline', '修改建議：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
		@if($myprofiledata->permission == 1)
			{!! Form::textarea('project_outline',null,array('class' => 'form-control','disabled')) !!} 
		@else
			{!! Form::textarea('project_outline',null,array('class' => 'form-control')) !!} 
		@endif
		</p >
		</div>

	</div>
	<legend>回饋設置</legend>
	<div class="form-group">
		{!! Form::label('project_reward', '修改建議：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
		@if($myprofiledata->permission == 1)
			{!! Form::textarea('project_reward',null,array('class' => 'form-control','disabled')) !!} 
		@else
			{!! Form::textarea('project_reward',null,array('class' => 'form-control')) !!} 
		@endif

		</p >
		</div>
	</div>
 	</fieldset>

	<div class="form-group"> 
    	<div class="col-sm-offset-1 col-sm-2">
			{!! Form::submit('儲存',array('class' => 'btn btn-primary btn-block')) !!}
		</div>
    	<div class="col-sm-2">
			<a class="btn btn-primary btn-block" href="{{ route('project.notice',$suggestion->id) }}">通知</a>
		</div>
    	<div class="col-sm-2">
			<a class="btn btn-primary btn-block" href="{{ route('project.pass',$project->id) }}">通過</a>
		</div>
  </div>

</div>
{!! Form::close() !!}


</div>


@endsection