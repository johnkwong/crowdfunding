@extends('layouts.admin')

@section('admin_content')


<div class="container">
{!! Form::model($sponsor, ['route' => ['admin.sponsor.update', $sponsor->id], 'method' => 'PATCH','files'=>true]) !!}    	

{!! Form::hidden('step', '1') !!} 
@if($sponsor->logo_path != '')
		{!! Form::hidden('has_img', '1') !!}
	@endif
<div class="well  col-sm-5 div_background">
	<fieldset>
    	<legend>贊助商資訊</legend> 

    	@include('errors.storestarter')
	<div class="form-group">
		{!! Form::label('company_name', '贊助商名稱：',array('class' => 'control-label col-md-3 column')) !!}
		<div class="col-md-9 column">
		{!! Form::text('company_name',$sponsor->company_name,array('class' => 'form-control','placeholder'=>'請輸入公司名稱')) !!} </p >
		</div>		
	</div>
	<div class="form-group">
		{!! Form::label('logo_path', '公司LOGO',array('class' => 'control-label col-md-3 column')) !!}
		<div class="col-md-9 column">
		{!! Form::file('logo_path',array('id' => 'file','class' => 'form-control','placeholder'=>'請輸入logo路徑')) !!} </p >
		</div>
	</div>
	
	</fieldset>
	<div class="form-group above-footer">
    	 <div class="pull-right">
			{!! Form::submit('確認修改',array('class' => 'btn btn-primary btn-block  ')) !!}
		</div>
	</div>
</div>	
{!! Form::close() !!}	

				<div class="col-md-5 column create-guide">  
				@if($sponsor->logo_path == '')
					<div id="image_preview"><img id="previewing" src="http://wefund.dev/images/dafault/nodefaultimg.gif" /></div>
				@else
					<div id="image_preview" ><img height="330" width="350" id="previewing" src="{{ $sponsor->logo_path }}" /></div>
				@endif
					
			   </div>	

</div>
@endsection
