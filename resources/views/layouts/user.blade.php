@extends('master')

@section('content')

<div class="jumbotron" style="padding-bottom: 0px;background-image:url('/images/dafault/blue2.jpg');background-size: 100% 100%;">
	<div class="row">
      <div class="container">
      	<div class="col-md-3" style="width:200px;padding-left:0px;">
            <a href="">
                 <img src="@if($user_data->avator == ''){!! asset('images/dafault/profile_picture.png') !!} @else {{ $user_data->avator }}  @endif"        style="width:150px;height:150px">
            </a>
        </div>   
        <h2 class="col-md-9" style="padding-left:0px;">{{ $user_data->name }}</h2>
      </div>
    </div>   

    <div class=" container" style="padding-top: 50px;">
		<ul class="nav nav-tabs">    <!-- 改nav-tabs中.nav-tabs > li和.nav-tabs > li > a:hover的background-color:  -->
  			<li class="{{ set_active('user/account/*') }}"><a href="{{ route('user.account.edit', Request::segment(3) )}}">帳號管理</a></li>
  			<li class="{{ set_active('user/profile/*') }}"><a href="{{ route('user.profile.edit', Request::segment(3) )}}">編輯個人資料</a></li>
  			<li class="{{ set_active('user/follow_project/*') }}"><a href="{{ route('followproject.index', Request::segment(3) )}}">收藏項目</a></li>
  			<li class="{{ set_active('user/sponsor_record/*') }}"><a href="{{ route('payment.index', Request::segment(3) )}}">贊助紀錄</a></li>
  			<li class="{{ set_active('user/message/*') }}"><a href="{{ route('user.message', Request::segment(3)) }}">訊息通知<span class="badge">{{ $user_data->messages()->where('ifread','0')->count() }}</span></a></li>
  			<li class="{{ set_active('user/starter_project/*') }}"><a href="{{ route('starter.index', Request::segment(3) )}}">我的項目</a></li>   <!--項目發起者-->
        <li class="{{ set_active('user/sponsor/*') }}"><a href="{{ route('sponsor.index', Request::segment(3) )}}">贊助項目</a></li>    <!--贊助商-->
		    
    </ul>
	</div>	
</div>

@yield('user_content')
@endsection


