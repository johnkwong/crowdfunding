@extends('layouts.user')

@section('user_content')
<div class="container">
<div class="container">
@include('errors.notification')
</div>

{!! Form::model($user, ['route' => ['user.profile.update', $user->id], 'method' => 'PATCH','class' => 'form-horizontal']) !!}

<div class="well project_index_border project_index_border div_background">
	<fieldset>
    	<legend>個人資訊</legend> 
	<div class="form-group">
		{!! Form::label('birthday', '生日：',array('class' => 'control-label col-sm-1')) !!}
		{!! Form::input('date', 'birthday',null) !!}
	</div>
	<div class="form-group">
		{!! Form::label('gender', '姓別：',array('class' => 'control-label col-sm-1')) !!}
		<div class="col-sm-5">
			<div class="col-sm-2">
				{!! Form::radio('gender', 1, true) !!}
				{!! Form::label('male', '男') !!}
			</div>
			<div class="col-sm-2">
				{!! Form::radio('gender', 0) !!} 
				{!! Form::label('female', '女') !!}</p >
			</div>		
		</div>	
	</div>
	<div class="form-group">
		{!! Form::label('country', '國家：',array('class' => 'control-label col-sm-1')) !!}
		<div class="col-sm-4">
			{!! Form::text('country', null,array('class' => 'form-control')) !!} </p >
		</div>	
	</div>
	<div class="form-group">
		{!! Form::label('city', '城市：',array('class' => 'control-label col-sm-1')) !!}
		<div class="col-sm-4">
			{!! Form::text('city', null,array('class' => 'form-control')) !!} </p >
		</div>	
	</div>
 	</fieldset>
</div>
<div class="well project_index_border project_index_border div_background">
	<fieldset>
    	<legend>自我介紹</legend> 

	<div class="form-group">
		{!! Form::label('info', '關於我：',array('class' => 'control-label col-sm-1')) !!}
		<div class="col-sm-4">
			{!! Form::textarea('info',null,array('class' => 'form-control')) !!} </p >
		</div>
	</div>
	</fieldset>
</div>
<div class="well project_index_border project_index_border div_background">
	<fieldset>
    	<legend>外部連結</legend> 
	<div class="form-group">
		{!! Form::label('facebook', 'Facebook：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-4">
			{!! Form::text('facebook',null,array('class' => 'form-control','placeholder'=>'輸入Facebook連結')) !!} </p >
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('youtube', 'YouTube：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-4">
			{!! Form::text('youtube',null,array('class' => 'form-control','placeholder'=>'輸入YouTube連結')) !!} </p >
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('website', '你的網站：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-4">
			{!! Form::text('website',null,array('class' => 'form-control','placeholder'=>'輸入Facebook連結')) !!} </p >
		</div>
	</div>
	</fieldset>
</div>
    <div class="form-group"> 
    	<div class="col-sm-offset-1 col-sm-4">
			{!! Form::submit('保存變更',array('class' => 'btn btn-primary btn-block')) !!}
		</div>
    </div>		
	{!! Form::close() !!}
</div>
@endsection

