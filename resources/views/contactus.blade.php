@extends('master')

@section('content')

 @if(Session::has('message3'))
 {!! Session::get('message3') !!}
 @endif

 <h2 class="col-sm-offset-1">聯絡我們</h2>
 <div class="row">
<div class="well col-sm-offset-1 col-sm-10 div_background">
    <legend>聯絡資訊</legend> 	
		<div class="col-sm-12">
		{!! Form::label('contact', 'E-mail：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
			fjuwefund@gmail.com
		</div>
		</div>	
		<div class="col-sm-12">
		{!! Form::label('contact', '連絡電話：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
			02-2157872
		</div>
		</div>	
		<div class="col-sm-12">
		{!! Form::label('contact', 'FAX：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
			274744747
		</div>
		</div>	
  </div>
</div>

<div class="row">     
<div class="well col-sm-offset-1 col-sm-10 div_background">	
    	<legend>聯絡</legend> 

	<fieldset>
	@include('errors.storestarter')
		<div class="form-group">
			{!! Form::open(['method' => 'POST', 'route' => 'contactus.send']) !!}

    	<fieldset>
		<div class="form-group">
			{!! Form::label('name', '姓名：',array('class' => 'control-label col-sm-1')) !!} </p >
			<div class="col-sm-6">
				{!! Form::text('name', null,array('class' => 'form-control')) !!} </p >
			</div>	
		</div>
		</fieldset>

			{!! Form::label('email', '你的E-mail：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!} </p >
		<div class="col-sm-6">
			{!! Form::text('email', null,array('class' => 'form-control')) !!} </p >
		</div>	
		</div>
		</fieldset>
		<fieldset>
		<div class="form-group">
			{!! Form::label('title', '主題：',array('class' => 'control-label col-sm-1')) !!} </p >
			<div class="col-sm-6">
				{!! Form::text('title', null,array('class' => 'form-control')) !!} </p >
			</div>	
		</div>
		</fieldset>
		<fieldset>
		<div class="form-group">
			{!! Form::label('contents', '內容：',array('class' => 'control-label col-sm-1')) !!} </p >
		<div class="col-sm-6">
			{!! Form::textarea('contents',null,array('class' => 'form-control')) !!} </p >
		</div>
		</div>
	</fieldset>
	    <div class="form-group"> 
    	<div class="col-sm-offset-1 col-sm-2">
			{!! Form::submit('送出',array('class' => 'btn btn-primary btn-block')) !!}

		</div>
    	<div class="col-sm-offset-0 col-sm-2">

			{!! Form::reset('重寫',array('class' => 'btn btn-primary btn-block')) !!}
			{!! Form::close() !!}
		</div>
    </div>		
</div>
</div>	

@endsection
