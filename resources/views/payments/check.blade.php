@extends('master')

@section('content')
<div class="jumbotron" style="background-image:url('/images/dafault/title.jpg');background-size: 100% 100%;">
  <div class="container">
  <h1>線上付款</h1> </div>
</div>

<div class="row"> 

<div class="well  container div_background">
	<legend>確認付款資訊</legend> 
	<table class="table table-hover table-striped">
    		<tbody>
    			<tr>
        			<td width='300'>姓名</td>
        			<td>{{ $name }}</td>
      			</tr>
      			<tr>
        			<td>連絡電話</td>
        			<td>{{ $phone }}</td>
      			</tr>
      			<tr>
        			<td>贊助項目</td>
        			<td>{{ $project->name }}</td>
      			</tr>
      			<tr>
        			<td>總贊助金額</td>
        			<td>${{ $totalamount }}</td>
      			</tr>
      			<tr>
        			<td>贊助回饋</td>
              @if($reward->reward_img!="")
        			<td><img src="{{ $reward->reward_img}}" style="width:200px"></img></td>
              @else
              <td>無</td>
              @endif
      			</tr>
      			<tr>
        			<td>付款方式</td>
        			<td>
              @if($paymethod == 0) 
                   信用卡
              @else
                  支付寶
              @endif         
              </td>
      			</tr>

    		</tbody>
  		</table>
      <a class="btn btn-primary col-sm-2" href="{{ route('payment.store2', $project->id) }}">確認付款</a>
      <a class="btn btn-primary col-sm-2" style="margin-left:20px;" href="/">取消付款</a>
	
</div>		

</div>
@endsection