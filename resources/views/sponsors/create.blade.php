@extends('master')

@section('content')
<div class="container ">     
	<div class="row clearfix">	
		<h3>您已選擇項目，請填寫贊助資訊。</h3>
		<p>您選擇的項目是：{{ $project->name }}</p>
		確認無誤或是
		<a class="btn btn-primary" href="/project/0/a">重新選擇</a>	<hr>

@if($step == 1)

@if($user->sponsors()->first() !=null)
			<div class="col-md-12 column">
			<h1>選擇贊助者</h1><hr>


			@foreach($user->sponsors()->get() as $sponsor)
			<div class="col-md-3 column">
			{!! Form::open(['method' => 'POST', 'route' => 'sponsor.store2']) !!}

			{!! Form::hidden('id', $project->id) !!} 

			{!! Form::hidden('sponsor_id', $sponsor->id) !!} 

			{!! Form::hidden('step', '0') !!} 

			{!! Form::submit($sponsor->company_name,array('class' => 'btn btn-primary btn-block')) !!}

			{!! Form::close() !!}
			</div>
			@endforeach

			</div>
@endif
<div class="col-md-12 column">
@include('errors.storestarter')
</div>

{!! Form::open(['method' => 'POST', 'route' => 'sponsor.store', 'files'=>true]) !!}

{!! Form::hidden('step', '1') !!} 

{!! Form::hidden('id', $project->id) !!} 

@include('sponsors.form', ['submitButtonText' => '下一步'])

{!! Form::close() !!}


@endif

@if($step == 2)

@include('errors.storestarter')

{!! Form::open(['method' => 'POST', 'route' => 'sponsorproject.store']) !!}

{!! Form::hidden('step', '2') !!} 

{!! Form::hidden('id', $project->id) !!} 

{!! Form::hidden('sponsorid', $sponsorid) !!} 

@include('sponsors.form2', ['submitButtonText' => '確認贊助'])

{!! Form::close() !!}

@endif

	</div>
</div>

@endsection