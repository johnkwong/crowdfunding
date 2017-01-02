@extends('layouts.admin')

@section('admin_content')

<div class="container">
  <h2>贊助商管理</h2>
  <p>管理贊助商</p>            
  <table class="table table-hover table-striped">
    <thead>
      <tr>
      	<th>編號</th>
        <th>名稱</th>
        <th>贊助項目數量</th>
        <th>總贊助金額</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>

  @foreach($sponsors as $sponsor)
      <tr>
        <td> {{ $sponsor->id }} </td>
        <td> {{ $sponsor->company_name }} </td>
        <td>  {{ $sponsor_projects->where('sponsor_id',$sponsor->id)->count()}}  </td>
        <td>  {{ $sponsor_projects->where('sponsor_id',$sponsor->id)->sum('amount')}}  </td>
        <td><a href="{{ route('admin.sponsor.show', $sponsor->id) }}" type="button" data-toggle="tooltip" title="查看">
                       <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
          </a>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('admin.sponsor.edit', $sponsor->id) }}" type="button"  data-toggle="tooltip" title="編輯">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        </a>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('admin.sponsor.destroy', $sponsor->id) }}" type="button"  data-toggle="tooltip" title="刪除"> 
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </a>
        </td>
      </tr>
  @endforeach

    </tbody>
  </table>
  <center>{!! $sponsors->render() !!}</center>
</div>


@endsection
