@extends('master')

@section('content')

<div class="jumbotron" style="padding-bottom: 0px; background-image:url('/images/dafault/blue2.jpg');background-size: 100% 100%;">
  <div class="row">
      <div class="col-md-12">
      

      </div>
    </div>   


    <div class="container" style="padding-top: 50px;">
    <h2>管理平台</h2>
    <ul class="nav nav-tabs">    <!-- 改nav-tabs中.nav-tabs > li和.nav-tabs > li > a:hover的background-color:  -->
@if($myprofiledata->permission == 1)
     <li @if(Route::getCurrentRoute()->getPath() == 'admin/user'){!! "class='active'" !!}@endif><a href="/admin/user">帳號管理</a></li>
@endif
        <li @if(Route::getCurrentRoute()->getPath() == 'admin/project/{status}'){!! "class='active'" !!}@endif><a href="/admin/project/6">項目管理</a></li>
@if($myprofiledata->permission == 1)
        <li @if(Route::getCurrentRoute()->getPath() == 'admin/sponsor'){!! "class='active'" !!}@endif><a href="/admin/sponsor">贊助商管理</a></li>
@endif
    </ul>
  </div>  
</div>

@yield('admin_content')
@endsection
