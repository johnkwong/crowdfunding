@extends('layouts.admin')

@section('admin_content')

<div class="row">
<div class="well container div_background">
    	<legend>基本情況</legend> 
    	<div class="col-sm-12">
		{!! Form::label('project', '聯絡信箱：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;width:130px;')) !!}
		<div class="col-sm-10">
			{{ $sponsor->user()->first()->email }}
		</div>	
		</div>
    	<div class="col-sm-12">
		{!! Form::label('project', '贊助商名稱：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;width:130px;')) !!}
		<div class="col-sm-10">
			{{ $sponsor->company_name }}
		</div>	
		</div>
		<div class="col-sm-12">
		{!! Form::label('project', '總贊助項目數量：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;width:130px;')) !!}
		<div class="col-sm-10">
			{{ $count }}
		</div>	
		</div>
		<div class="col-sm-12">
		{!! Form::label('project', '總贊助金額',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;width:130px;')) !!}
		<div class="col-sm-10">
			{{ $sum }}
		</div>	
		</div>
		<div class="col-sm-12">
		{!! Form::label('project', '贊助商LOGO',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;width:130px;')) !!}
		<div class="col-sm-10">
			<img src="{{ $sponsor->logo_path }}" style="width:150px;height:150px">
		</div>	
		</div>
</div>

<div class="well  container div_background">
<legend>贊助項目</legend> 
  <table class="table table-hover table-striped">
  	 <thead>
      <tr>
      	<th>項目編號</th>
        <th>項目名稱</th>
        <th>贊助金額</th>
      </tr>
    </thead>
  @foreach($sponsor->sponsor_projects()->get() as $sponsor_project)
     <tr>
      	<td>{{ $sponsor_project->project_id }}</td>
        <td>{{ $project->where('id',$sponsor_project->project_id)->first()->name }}</td>
        <td>{{ $sponsor_project->amount }} </td>
     </tr>
  @endforeach
  </table>  

</div>
</div>	

@endsection
