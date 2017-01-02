@extends('layouts.admin')

@section('admin_content')

<div class="container">
  <h2>使用者管理</h2>
  <p>管理使用者</p>            
  <table class="table table-hover table-striped">
    <thead>
      <tr>
      	<th>編號</th>
        <th>名稱</th>
        <th>E-mail</th>
        <th>項目數量</th>
        <th>總支持金額</th>
        <th>權限</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>

  @foreach($users as $user)
      <tr>
      	<td> {{ $user->id }}</td>
        <td> {{ $user->name}}</td>
        <td> {{ $user->email}}</td>        
        <td>{{ $user->projects()->count()}} </td>        
        <td>{{ $user->payments()->sum('amount')}} </td>
        <td>@if($user->permission == 0)一般會員
        @elseif($user->permission == 1)管理員
        @elseif($user->permission == 2)審查委員
        @endif
        </td>
        <td>
          <a href="{{ route('admin.user.show', $user->id) }}" type="button"  data-toggle="tooltip" title="查看">
             <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
          </a>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('user.account.edit', $user->id) }}" type="button"  data-toggle="tooltip" title="編輯">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
          </a>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('message.create', $user->id) }}" type="button"  data-toggle="tooltip" title="通告">
            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
          </a>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('admin.user.destroy', $user->id) }}" type="button"  data-toggle="tooltip" title="刪除">
           <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </a>
        </td>
      </tr>
	   
	@endforeach

    </tbody>
  </table>
  <center>{!! $users->render() !!}</center>
</div>


@endsection
