@extends('master')

@section('content')

<div class="container ">
	<div class="row clearfix">

<div class="col-md-12 column">

		<h1>發起者資料 
		<a class="pull-right" href="{{ route('starter.destroy', $starter->id) }}" data-toggle="tooltip" title="刪除">
		 <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>

		</a></h1>
			<hr>
	


		@include('errors.storestarter')
			
		<div class="row">
			{!! Form::model($starter, ['route' => ['starter.update', $starter->id], 'method' => 'PATCH']) !!}
			
			@include('starters.form', ['submitButtonText' => '修改'])
			
			{!! Form::close() !!}

		</div>

    		
			
</div>
</div>
</div>




@endsection