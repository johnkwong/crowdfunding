@extends('master')

@section('content')


<script type="text/javascript">
<!--
// return the value of the radio button that is checked
// return an empty string if none are checked, or
// there are no radio buttons


// set the radio button with the given value as being checked
// do nothing if there are no radio buttons
// if the given value does not exist, all the radio buttons
// are reset to unchecked
function setCheckedValue(radioObj, newValue) {
	if(!radioObj)
		return;
	var radioLength = radioObj.length;
	if(radioLength == undefined) {
		radioObj.checked = (radioObj.value == newValue.toString());
		return;
	}
	for(var i = 0; i < radioLength; i++) {
		radioObj[i].checked = false;
		if(radioObj[i].value == newValue.toString()) {
			radioObj[i].checked = true;
		}
	}
}
//-->
</script>




<div class="jumbotron" style="background-image:url('/images/dafault/title.jpg');background-size: 100% 100%;">
	<div class="container">
	<h1>線上付款</h1> </div>
</div>
<div class="container ">

<div class="row">
@include('errors.storestarter')

{!! Form::open(['method' => 'POST','route' => 'payment.store','class' => 'form-horizontal', 'onsubmit' =>'return true;' , 'name' => 'paymentform']) !!}

{!! Form::hidden('step', '1') !!} 

{!! Form::hidden('pid', $pid) !!} 

{!! Form::hidden('rid', $rid) !!} 

	<div class="col-md-4 column">
		<div class="row well div_background">
	    	<legend>額外贊助</legend>     
			{!! Form::label('extrapay', '額外贊助：',array('class' => 'control-label col-sm-4','style' => 'padding: 1px;')) !!}
			<div class="col-sm-8 column" >
				{!! Form::text('extrapay',null,array('class' => 'form-control')) !!} </p >
			</div>
		</div>

		<div  class="row well div_background">
			<fieldset>
		    	<legend>個人資訊</legend> 
			<div class="form-group">
				{!! Form::label('name', '姓名：',array('class' => 'control-label col-sm-4','style' => 'padding: 1px;')) !!}
				<div class="col-sm-8">
					{!! Form::text('name', null,array('class' => 'form-control')) !!} </p >
				</div>	
			</div>
			<div class="form-group">
				{!! Form::label('phone', '連絡電話：',array('class' => 'control-label col-sm-4','style' => 'padding: 1px;')) !!}
				<div class="col-sm-8">
				{!! Form::text('phone', null,array('class' => 'form-control')) !!} </p >
				</div>
			</div>
		    </fieldset>
	   	</div>
	</div>
	<div class="col-md-1 column"></div>
    <div class="col-md-7 column">
	  <div class="row well div_background">
	    <legend>付款方式</legend>
  
  	<div class="col-sm-6">

	        <center> {!! Form::radio('paymethod', '0', false, array('class' => 'radio','style' => 'margin:10px;'));!!}
			<input type="button" onclick="setCheckedValue(document.forms['paymentform'].elements['paymethod'], '0');"  style="background-image:url('/images/dafault/01.gif');width:300px;height:232px;">
	   </div>     
	   <div class="col-sm-6">
	       <center>{!!Form::radio('paymethod', '1', false, array('class' => 'radio','style' => 'margin:10px;'));!!}     
			<input type="button" onclick="setCheckedValue(document.forms['paymentform'].elements['paymethod'], '1');"  style="background-image:url('/images/dafault/02.gif');width:300px;height:232px;">
	  
	  </div>
	</div>
	</div>
	<div class="form-group above-footer">
    	 <div class="col-md-2 pull-right">

			{!! Form::submit('確認付款資訊',array('class' => 'btn btn-primary btn-block  ')) !!}
		</div>
	</div>
{!! Form::close() !!}





  </div>

</div>
</div>


</div>
@endsection
