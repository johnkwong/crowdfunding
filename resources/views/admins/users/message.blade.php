@extends('layouts.admin')

@section('admin_content')

<div class="row">
     
<div class="well  container div_background">
	
    	<legend>通知使用者</legend> 
{!! Form::open(['method' => 'POST', 'route' => 'message.store']) !!}	
{!! Form::hidden('user_id', $id )!!}
	<div class="row">	
	@include('errors.storestarter')	
		<div class="form-group">
			{!! Form::label('title', '主題：',array('class' => 'control-label col-sm-1')) !!} </p >
			<div class="col-sm-6">
				{!! Form::text('title', null,array('class' => 'form-control')) !!} </p >
			</div>	
		</div>
	</div>	
	<div class="row">			
		<div class="form-group">
			{!! Form::label('content', '內容：',array('class' => 'control-label col-sm-1')) !!} </p >
			<div class="col-sm-6">
				{!! Form::textarea('content',null,array('class' => 'form-control')) !!} </p >
			</div>
		</div>
	</div>
	<div class="row">			
	    <div class="form-group"> 
	    	<div class="col-sm-offset-1 col-sm-2">
				{!! Form::submit('傳送',array('class' => 'btn btn-primary btn-block')) !!}

			</div>
	    	<div class="col-sm-offset-0 col-sm-2">

				{!! Form::reset('重寫',array('class' => 'btn btn-primary btn-block')) !!}
			</div>
		</div>	
    </div>

{!! Form::close() !!}	

</div>

</div>


@endsection
