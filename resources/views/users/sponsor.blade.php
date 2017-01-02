@extends('layouts.user')

@section('user_content')

<div class="container">


  <div class="well project_index_border project_index_border div_background">

    <legend>繳款贊助紀錄</legend>
    @if($payment->get()->count() == 0)
<h1>尚無贊助紀錄</h1>

@else
    <table class="table table-hover table-striped">
        <thead>
            <tr>
              <th>項目名稱</th>
              <th>贊助金額</th>
              <th>贊助日期</th>
              <th>付費方式</th>
            </tr>
        </thead>
        <tbody>
          @foreach($payment->get() as $payments)
          @foreach($project as $projects)
          @if($projects->id == $payments->project_id)
            <tr>
              <td>{{ $projects->name }}</td>
              <td>{{ $payments->amount }}</td>
              <td>{{ $payments->created_at }}</td>
              <td>
                 @if($payments->type == 0) 
                    信用卡
                 @else
                     支付寶
                 @endif        
              </td>
            </tr>
          @endif  
          @endforeach  
          @endforeach  

        </tbody>
      </table>
  </div>
@endif

</div> 

@endsection
