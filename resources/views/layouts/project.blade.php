@extends('master')

@section('content')
<script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.5.1.js">
</script>
<script src="https://connect.facebook.net/en_US/all.js">
</script>
<script type="text/javascript">



 $(function () {
  $('[data-toggle="popover"]').popover()
})
</script>



<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=116473952025328";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<!-- <div class="fb-like" data-href="http://140.136.155.114/projects/4/1" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div> -->




<div class="jumbotron" style="padding-bottom: 0px;padding-bottom: 0px; background-image:url('/images/dafault/sky.png');background-size: 100% 100%;">
  <div class=" container" > 
    <div class="row clearfix">
      <center><h2>{{ $project->name }}    <a data-html="true" data-placement="bottom" tabindex="0" class="btn btn-lg btn btn-success-outline" role="button" data-toggle="popover" data-trigger="focus" title="QR Code" data-content="<img src='https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl={{ Request::url()}}&choe=UTF-8'>"><img style="width:40px;height:40px;"src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl={{ Request::url()}}&choe=UTF-8"></a>
</h2>
      <h4>by{{ $starter }}</h4> </center>   
      <div class="col-md-7 column">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe  src="{{ $project->video_link }}" frameborder="0" allowfullscreen></iframe>
      </div>
      @if(Auth::user())

      @if(($user->projects()->where('projects.id',$project->id)->count()!=0&& $project->status<=1)|| $myprofiledata->permission == 1)
      <a href="/project/edit/{{ $project->id }}/2"  data-toggle="tooltip" title="編輯">
            <span class="glyphicon glyphicon-edit" aria-hidden="true" style="margin-left:570px;margin-top:15px;"></span>
      </a>
      @endif
      @endif</h1>
      </div>
      <div class="col-md-1 column"></div>
      <div class="col-md-4 column">
        <h4>已募得</h4>
        <h2>${{ $amount }} / {{ $project->pre_amount }}</h3>
@if($project->sponsor_projects()->first() != null)
        <h4>Like: $ {{ $likecount * 10 }} Share: ${{ $sharecount * 20 }} Normal: {{ $project->payamount($project) }}</h4>
@endif
        <br />
        <h4>剩餘天數</h4>
        <h2>{{ $difference }}天</h3><br>
        <h4>已接受</h4>
        <h2>{{ $count }}人贊助</h3><br>



        @if(Auth::check())
        @if($project_follower == 0)
          <a  style="margin-right: 5px;" href="{{ route('followproject.store', $project->id) }}" data-toggle="tooltip" title="追蹤">
            <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
          </a>        
        @endif
        

        @foreach($project->follow_projects()->get() as $follow_project)
        @if($follow_project->user_id == Auth::user()->id)
        <a style="margin-right: 5px;" href="{{ route('followproject.destroy', $follow_project->id) }}" data-toggle="tooltip" title="取消追蹤">
            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
        </a>
        @endif
        @endforeach
        @else
           <a style="margin-right: 5px;" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
          </a> 
        @endif
        收藏人數：{{ $project->follow_projects()->count() }} 
        @if($project->sponsor_projects()->first() == null && $project->start_date > $now)
         <a href="/sponsor/create/{{ $project->id }}/0/1" data-toggle="tooltip" class="pull-right" title="贊助" style="text-decoration: none; margin-right:130px;" >
              <p style="background-color: #A03838;font-size:15px;color:#FFF;height:30px;width:80px;text-align:center;padding-top:5px;">我要贊助</p>
        </a>
        @endif 

 </p>
 <!-- http://{{ $_SERVER['SERVER_NAME'] }}/projects/{{ Request::segment(2)}} -->
@if($project->start_date <= $now)
<div class="col-md-12">
<div style="display:inline;" >
<!-- <div disable="true" class="fb-like" data-href="http://{{ $_SERVER['SERVER_NAME'] }}/projects/{{ Request::segment(2)}}" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
 -->
<div class="fb-like" data-href="http://{{ $_SERVER['SERVER_NAME'] }}/projects/{{ Request::segment(2)}}" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
 </div>
<div style="display:inline;  position:absolute; left:61px; top:0px;">
<!-- <button id="shareonfacebook" style="border: 0; background: transparent;width:44px;height:20px;"><img src="\images\dafault\share.png" style="width:44px;height:20px;"></button>
 --></div>
</div>
@endif

      </div>
      <div class="col-md-12 column" style="padding-top: 32px;">
        <ul class="nav nav-tabs">    
          <li @if($step == 1){!! "class='active'" !!}@endif><a href="/projects/{{ $project->id }}/1">項目介紹</a></li>
          <li @if($step == 2){!! "class='active'" !!}@endif><a href="/projects/{{ $project->id }}/2">項目進展</a></li>
          <li @if($step == 3){!! "class='active'" !!}@endif><a href="/projects/{{ $project->id }}/3">回饋與問答</a></li>
          <li @if($step == 4){!! "class='active'" !!}@endif><a href="/projects/{{ $project->id }}/4">贊助名單</a></li>
        </ul>
      </div>  
      </div>    
  </div>
  
</div>

<div class="container" >
  <div class="row clearfix" >  
    <div class="col-md-8 column">
    <div class="col-md-12 row" style="margin-left:0px;background:-webkit-gradient(linear, left top, left bottom, from(#ECECEC), to(rgba(211,231,245,0.5)));">
      @yield('project_content')
    </div>
    </div>
    <div class="col-md-4 column" style="background:-webkit-gradient(linear, left top, left bottom, from(#ECECEC), to(rgba(211,231,245,0.5)));">
    @if($project->sponsor_projects()->first() != null && $project->sponsor_projects()->first()->amount >= $likecount*10+$sharecount*20)
    
      <h1>贊助者 
     </h1>

      <div class="thumbnail project_border div_background">  
          <img class="img-responsive" src="{{ $sponsor->logo_path }}" ></img>
          <strong><h3><center style="word-break:break-all;">{{ $sponsor->company_name }}</center></h3></strong></p>
      </div>
    @endif 

      <h3>贊助一定金額可獲得以下回饋： 
      @if(Auth::user())
      @if($user->projects()->where('projects.id',$project->id)->count()!=0 || $myprofiledata->permission == 1)
      <a href="/projectreward/edit/{{ $project->id }}/3" href="#" data-toggle="tooltip" title="編輯">
               <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
      </a>
      @endif
      @endif
     </h1>

     @foreach($project->project_rewards()->get() as $reward)
      <a href="/payment/{{ $project->id }}/{{ $reward->id }}" class="thumbnail project_border div_background">  
          <strong><h3  style="padding-left:10px;">贊助${{ $reward->reward_amount }}+</h3></strong></p>
          @if($reward->reward_img!="")<img class="img-responsive" src="{{ $reward->reward_img}}" style="width:200px;margin-bottom: 20px;"></img>@endif
          <p style="word-break:break-all;padding-left:10px;">
          {!! nl2br(e($reward->reward_introduction)) !!}</p>
      </a>
     @endforeach 
    </div>
  </div>
</div>


<script>
FB.init({
appId : '116473952025328'
});
</script>

@yield('admin_content')
@endsection
