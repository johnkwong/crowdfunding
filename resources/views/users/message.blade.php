@extends('layouts.user')

@section('user_content')

<div class=" container">

  <div class="well project_index_border project_index_border div_background">
    <legend>訊息通知</legend>
      
    @if($messages->get()->count() == 0)
      <h1>尚無訊息通知</h1>   
    @else              
    <table class="table table-hover table-striped">
        <thead>
            <tr>
              <th></th>
              <th>寄件者</th>
              <th>日期</th>
              <th>主旨</th>
            </tr>
        </thead>
        <tbody>
        
        {!! Form::open(['route' => 'message.destroy', 'METHOD' => 'DELETE']) !!}
@foreach($messages->get() as $message)        
            <tr @if($message->ifread==0) style="background-color: rgba(5, 5, 5, 0.07);" @endif>
              <td>{!! Form::checkbox('selected_msg[]',$message->id) !!}</td>
            
              <td>{{ $users->where('id',$message->user_id)->first()->name }}</td>
              <td>{{ $message->created_at }}</td>
              <td><a href="{{ route('message.show', ['id' =>  $user->id, 'mid' => $message->id]) }}">{{ str_limit($message->title, $limit = 30)}}</a></td>
            </tr>

@endforeach            
        </tbody>
      </table>
      <div class="form-group">
          <div class="col-md-2 pull-left">
              {!! Form::submit('刪除所選信息',array('class' => 'btn btn-primary btn-block  ')) !!}
          
          </div>

          {!! Form::close() !!}
      </div>
        
@endif
  </div> 

</div>
<div style="padding-top: 20px;"></div>

@endsection
