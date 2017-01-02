@extends('master')

@section('content')

<div class="container ">     
	<div class="row clearfix">	
{!! Form::model($sponsor, ['route' => ['sponsor.update', $sponsor->id], 'method' => 'PATCH']) !!}


	@include('sponsors.form', ['submitButtonText' => '確認編輯'])

{!! Form::close() !!}

@include('errors.storesponsor')

	</div>
</div>
@endsection