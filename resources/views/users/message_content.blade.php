@extends('layouts.user')

@section('user_content')

<div class="row">
<div class="col-sm-offset-1">
  <div class="well col-sm-11 project_index_border project_index_border div_background">

    <legend>訊息通知</legend>
    <div class="col-sm-12">
    {!! Form::label('message', '主旨：',array('class' => 'control-label col-sm-1')) !!}
    <div class="col-sm-10">
     {{ $message->title }}
    </div>
    </div>
    <div class="col-sm-12">
    {!! Form::label('message', '時間：',array('class' => 'control-label col-sm-1')) !!}
    <div class="col-sm-10">
      {{ $message->created_at }}
    </div>
    </div>  
    <div class="col-sm-12">
    {!! Form::label('message', '寄件者：',array('class' => 'control-label col-sm-1')) !!}
    <div class="col-sm-10">
     {{ $user->first()->name }}
    </div>
    </div>
    <div class="col-sm-12">
    {!! Form::label('message', 'Email：',array('class' => 'control-label col-sm-1')) !!}
    <div class="col-sm-10">
     {{ $user->first()->email }}
    </div>
    </div> 
    <div class="col-sm-8 thumbnail" style="margin: 30px 0px 0px 30px;">  
        {!! nl2br(e($message->content)) !!}
    </div> 
  </div> 
</div>
</div>

@endsection
