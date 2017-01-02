@extends('layouts.admin')

@section('admin_content')


<div class="row">
<div class="well  container div_background">
    <legend>個人資訊</legend> 
   		<div class="col-sm-12">
		{!! Form::label('user', '姓名：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
			 {{ $user->name}}
		</div>
		</div>	
		<div class="col-sm-12">
		{!! Form::label('user', '生日：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
			 {{ $user->birthday}}
		</div>
		</div>	
		<div class="col-sm-12">
		{!! Form::label('user', 'E-mail：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
			 {{ $user->email}}
		</div>
		</div>	
		<div class="col-sm-12">
		{!! Form::label('user', '姓別：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
			 {{ $user->gender}}
		</div>
		</div>	
		<div class="col-sm-12">
		{!! Form::label('user', '國家：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
			  {{ $user->city}}
		</div>	
		</div>	
		<div class="col-sm-12">
		{!! Form::label('user', '手機號碼：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
			 {{ $user->phone_no}}
		</div>	
		</div>	
		<div class="col-sm-12">
		{!! Form::label('user', '地址：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
			 {{ $user->address}}
		</div>	
		</div>	

</div>




<div class="well  container div_background">
    	<legend>自我介紹</legend> 
		<div class="col-sm-12">
		{!! Form::label('user', '關於我：',array('class' => 'control-label col-sm-1','style' => 'padding: 1px;')) !!}
		<div class="col-sm-10">
		{!! nl2br(e($user->info)) !!}
		</div>	
		</div>
</div>



<div class="well  container div_background">
	<fieldset>
    	<legend>外部連結</legend> 
	<div class="form-group">
		<div class="col-sm-8">
			<a href="https://www.facebook.com/{{ $user->facebook_id}}"><img src="http://icons.iconarchive.com/icons/cornmanthe3rd/plex/32/Communication-facebook-icon.png"></a>
			<a href="{{ $user->youtube}}"><img src="http://icons.iconarchive.com/icons/cornmanthe3rd/plex/32/Media-youtube-icon.png"></a>
			<a href="{{ $user->website}}"><img src="http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/24/Web-Browsers-Internet-Explorer-Metro-icon.png"></a>
		</div>

	</div>
	</fieldset>
</div>

</div>



@endsection
