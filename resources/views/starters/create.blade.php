@extends('master')

@section('content')

<div class="container ">
	<div class="row clearfix">

@if($user->starters()->first() !=null)
			<div class="col-md-12 column">
			<h1>選擇發起者</h1><hr>


			@foreach($user->starters()->get() as $starter)
			<div class="col-md-3 column">
			{!! Form::open(['method' => 'POST', 'route' => 'starter.store2','class' => 'form-horizontal']) !!}

			{!! Form::hidden('id', $starter->id) !!} 

			{!! Form::submit($starter->name,array('class' => 'btn btn-primary btn-block')) !!}

			{!! Form::close() !!}
			</div>
			@endforeach

			</div>
@endif
<div class="col-md-12 column">

		<h1>發起者資料</h1>
			<hr>
	
		@include('errors.storestarter')
			
		<div class="row">
			{!! Form::open(['method' => 'POST', 'route' => 'starter.store','class' => 'form-horizontal']) !!}
			
			@include('starters.form', ['submitButtonText' => '下一步'])

			{!! Form::close() !!}

		</div>
</div>
</div>
</div>




@endsection