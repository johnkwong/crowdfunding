@extends('layouts.user')

@section('user_content')


<div class="container">
@include('errors.notification')
{!! Form::model($user, ['route' => ['user.account.update', $user->id],'class' => 'form-horizontal', 'method' => 'PATCH']) !!}
<div class="well project_index_border div_background">
	<fieldset>
    	<legend>帳戶資訊</legend> 
    	
	<div class="form-group">
		{!! Form::label('email', '聯絡信箱：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-4">
			{!! Form::text('email', null,array('class' => 'form-control','disabled')) !!} </p >
		</div>	
	</div>
	<div class="form-group">
		{!! Form::label('name', '姓名：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-4">
			{!! Form::text('name', null,array('class' => 'form-control')) !!} </p >
		</div>	
	</div>

	<div class="form-group">
		{!! Form::label('phone_no', '連絡電話：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-4">
			{!! Form::text('phone_no', null,array('class' => 'form-control')) !!} </p >
		</div>	
	</div>
@if($per->permission== 1)	
	<div class="form-group">
		{!! Form::label('permission', '權限更改：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-4">
	{!! Form::select('permission', ['使用者','管理員','審查委員'], null, ['class' => 'form-control']) !!} </p >					
		</div>	
	</div>
@endif	
 	</fieldset>
</div>


@if($user_data->password != '')
	@if($myprofiledata->permission == 1 )
		{!! Form::hidden('admin', '1') !!}
	@endif 
<div class="well project_index_border div_background">
	<fieldset>
    	<legend>變更密碼</legend> 
	<div class="form-group">
		{!! Form::label('current_password', '當前密碼：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-4">
			{!! Form::password('current_password',array('class' => 'form-control','placeholder'=>'輸入當前密碼')) !!} </p >
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('newpassword', '新密碼：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-4">
			{!! Form::password('newpassword',array('class' => 'form-control','placeholder'=>'輸入新密碼')) !!} </p >
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('newpassword_confirmation', '確認密碼：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-4">
			{!! Form::password('newpassword_confirmation',array('class' => 'form-control','placeholder'=>'輸入確認密碼')) !!} </p >
		</div>
	</div>
	</fieldset>
</div>
@endif
    <div class="form-group"> 
    	<div class="col-sm-offset-1 col-sm-4">
			{!! Form::submit('保存變更',array('class' => 'btn btn-primary btn-block')) !!}
		</div>
    </div>		
	{!! Form::close() !!}
</div>
@endsection
