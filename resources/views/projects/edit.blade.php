@extends('master')

@section('content')

<div class="container ">
	<div class="row clearfix">
		<h1>修改項目</h1>
			<ul class="nav nav-pills">
				<li @if($step == 1){!! "class='active'" !!}@endif><a href="/project/edit/{{ $project->id }}/1">項目簡介</a></li>
				<li @if($step == 2){!! "class='active'" !!}@endif><a href="/project/edit/{{ $project->id }}/2">項目大綱</a></li>
				<li @if($step == 3){!! "class='active'" !!}@endif><a href="/projectreward/edit/{{ $project->id }}/3">回饋設置</a></li>
			</ul>
			<hr>
			
			@if($step == 1)

			<div class="row">
			@include('errors.storestarter')

			{!! Form::model($project, ['route' => ['project.update', $project->id], 'method' => 'PATCH','files'=>true]) !!}
			
			{!! Form::hidden('step', '1') !!}

			{!! Form::hidden('update', '1') !!} 

			@include('projects.projectform.step1', ['submitButtonText' => '修改'])

			{!! Form::close() !!}

			</div>
			
			@endif
			@if($step == 2)
			<div class="row">
			@include('errors.storestarter')

			{!! Form::model($project, ['route' => ['project.update', $project->id], 'method' => 'PATCH']) !!}
			
			{!! Form::hidden('step', '2') !!}

			{!! Form::hidden('update', '1') !!} 
			
			@include('projects.projectform.step2', ['submitButtonText' => '修改'])

			{!! Form::close() !!}
			</div>

			@endif
			@if($step == 3)

		<div class="row">
			@include('errors.storestarter')

			{!! Form::open(['method' => 'POST', 'route' => 'projectreward.store','class' => 'form-horizontal', 'files'=>true]) !!}

			{!! Form::hidden('hdd_project_id', $project->id ) !!}

			{!! Form::hidden('update', '1') !!} 

			<div class="col-md-12 column well">
				<legend>新增回饋</legend>		
			@include('projects.projectform.step3', ['submitButtonText' => '確認新增'])

			{!! Form::close() !!}


			<!-- 修改 -->

			@foreach($project->project_rewards()->get() as $reward)

	
			{!! Form::model($reward, ['route' => ['projectreward.update', $reward->id], 'method' => 'PATCH', 'files'=>true]) !!}

			{!! Form::hidden('hdd_project_id', $project->id ) !!}

			{!! Form::hidden('hdd_projectreward_id', $reward->id ) !!}

			{!! Form::hidden('update', '1') !!} 

			{!! Form::hidden('update2', '1') !!} 

			<div class="col-md-12 column well">
				<legend>修改回饋</legend>		
				<a href="{{ route('projectreward.destroy',$reward->id) }}" class="btn pull-right" style="margin-left:10px;" data-toggle="tooltip" title="刪除">

				 <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			@include('projects.projectform.step3', ['submitButtonText' => '確認修改'])

			{!! Form::close() !!}

			@endforeach			
			
		</div>
				<a class="btn btn-primary pull-right" style="margin-left:10px;" href="{{ route('projectstatus.update', $project->id) }}">確認送審</a>
			@endif
		</div>	
	</div>	
</div>
</div>
@endsection
