@extends('master')

@section('content')

<div id="myCarousel" class="carousel slide">
<ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
</ol>

<div class="carousel-inner" >
    <div class="item active">
         <img src="images/carousel/1.jpg" style="width:100%;" class="fill">
         <div class="carousel-caption">
         </div>
    </div>
    <div class="item">
         <img src="images/carousel/2.jpg" style="width:100%;" class="fill">
         <div class="carousel-caption">
         </div>
    </div>
    <div class="item">
         <img src="images/carousel/3.jpg" style="width:100%;" class="fill">
         <div class="carousel-caption">
         </div>
    </div>
    <div class="item">
         <img src="images/carousel/4.jpg" style="width:100%;" class="fill">
         <div class="carousel-caption">
         </div>
    </div>
    <div class="item">
        <img src="images/carousel/5.jpg" style="width:100%;" class="fill">
        <div class="carousel-caption">
         </div>
    </div>

</div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
</div>

<script>
    $('.carousel').carousel({
        interval: 800 
    })
</script>

<div class="row">
<div style="word-break:break-all ;padding-top: 50px;">
    <div class="well container project_index_border div_background">
      <legend><center><h1>每日精選</h1></center></legend>  

@foreach($projects_best as $projects_best)
      <a href="/projects/{{ $projects_best->id }}/1">
        <div class="col-md-12 row">
          <div class="col-md-5 column">
             <img class="img-responsive" src="{{ $projects_best->cover_img_path}}" style="width:450px;height:300px">             
          </div>   
          <div class="col-md-7 column" style="padding-left: 50px;height:160px;">
             <h2>{{ $projects_best->name}}</h2> 
          <p>{{ $projects_best->outline}}</p>
          </div>

          <div class="col-md-7 column" style="padding-left: 50px;">
          已募得<font size="5" style="margin-right:20px;margin-left:8px;">$@if($projects_best->sponsor_projects()->first() == null){{ $projects_best->payamount($projects_best) }}@else{{ $projects_best->payamount($projects_best)+$response4[0]->like_count*10+$response4[0]->share_count*20 }}@endif</font>
          已接受<font size="5" style="margin-right:20px;margin-left:8px;">{{ $projects_best->payments()->where('project_id',$projects_best->id)->count()}}人贊助</font>

          <div class="progress progress-striped" style="margin-top:10px;"> 
                <div class="progress-bar progress-success" role="progressbar" 
                  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:@if($projects_best->pre_amount != 0 && $projects_best->sponsor_projects()->first() == null){{ ($projects_best->payamount($projects_best))/$projects_best->pre_amount*100 }}@elseif($projects_best->pre_amount != 0 && $projects_best->sponsor_projects()->count()!=0){{ ($projects_best->payamount($projects_best)+$response4[0]->like_count*10+$response4[0]->share_count*20)/$projects_best->pre_amount*100 }}@else 0 @endif%;">
                  <span class="sr-only">@if($projects_best->pre_amount != 0){{number_format(($projects_best->payments()->where('project_id',$projects_best->id)->sum('amount')+$projects_best->sponsor_projects()->where('project_id',$projects_best->id)->sum('amount'))/$projects_best->pre_amount*100, 2)  }}@else 0 @endif %
   Complete</span>
              </div>
              </div>
              <center><font size="5" style="margin-right:20px;">完成度</font><font size="7" style="margin-right:20px;margin-left:8px;">@if($projects_best->pre_amount != 0)@if($projects_best->sponsor_projects()->first() == null){{number_format(($projects_best->payamount($projects_best))/$projects_best->pre_amount*100, 2)  }}@else{{number_format(($projects_best->payamount($projects_best)+$response4[0]->like_count*10+$response4[0]->share_count*20)/$projects_best->pre_amount*100, 2)  }}@endif @else 0 @endif%</font></center>
          </div>
          </div>
        </a>


@endforeach
      
    </div>   
</div>


    <div class="well container project_index_border div_background" style="word-break:break-all;">
      <legend><center><h1>即將開始</h1></center></legend>  

      @foreach($projects_new as $key => $project) 
      
  <div class="col-md-3">
  <div class="ribbon-wrapper-green">
         @if(($project->sponsor_projects()->first()!=null&&$project->status!=5) || $project->status==3)<div class="ribbon-green rgreen">@if($project->status==3)募資完成@else已贊助@endif</div>@endif
      </div>
        <a href="/projects/{{ $project->id }}/1" class="thumbnail project_border">  
                <img class="img-responsive" src="{{ $project->cover_img_path}}">
                <p style="height:57px">{{ str_limit($project->outline, $limit = 47)}}.....</p> 
                <div class="progress progress-striped"> 
                  
                   <!-- css中改progress-striped這個class margin-bottom為10px -->

      <div class="progress-bar progress-success" role="progressbar" 
                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:@if($project->pre_amount != 0 && $project->sponsor_projects()->first() == null){{ ($project->payamount($project))/$project->pre_amount*100 }}@elseif($project->pre_amount != 0 && $project->sponsor_projects()->count()!=0){{ ($project->payamount($project)+$response5[$key]->like_count*10+$response5[$key]->share_count*20)/$project->pre_amount*100 }}@else 0 @endif%;">
                <span class="sr-only">40% Complete</span>
              </div>
            </div>
            <b>{{ $project->name }}</b><br>
            <table class="project-status"><tr><td>已完成</td><td>金額達</td><td>贊助人數</td></tr>
             <!-- css中增加project-status這個class-->
                <tr>
                         <td>@if($project->pre_amount != 0)@if($project->sponsor_projects()->first() == null){{number_format(($project->payamount($project))/$project->pre_amount*100, 2)  }}@else{{number_format(($project->payamount($project)+$response5[$key]->like_count*10+$response5[$key]->share_count*20)/$project->pre_amount*100, 2)  }}@endif @else 0 @endif %</td>
                    <td>$@if($project->sponsor_projects()->first() == null){{ $project->payamount($project) }}@else{{ $project->payamount($project)+$response5[$key]->like_count*10+$response5[$key]->share_count*20 }}@endif</td>
                <td>{{ $project->payments()->where('project_id',$project->id)->count()}}人</td>
                </tr>
            </table>        
              </a>
    </div>
  
    @endforeach
    
    </div>   



    <div class="well container project_index_border div_background" style="word-break:break-all;">
      <legend><center><h1>最新項目</h1></center></legend>  

   @foreach($projectslatest as $key => $project) 
    <div class="col-md-3">
    <div class="ribbon-wrapper-green">
         @if(($project->sponsor_projects()->first()!=null&&$project->status!=5) || $project->status==3)<div class="ribbon-green rgreen">@if($project->status==3)募資完成@else已贊助@endif</div>@endif
      </div>
         <a href="/projects/{{ $project->id }}/1" class="thumbnail project_border">  
                <img class="img-responsive" src="{{ $project->cover_img_path}}">
                <p style="height:57px">{{ str_limit($project->outline, $limit = 47)}}.....</p> 
                <div class="progress progress-striped"> 
                  
                   <!-- css中改progress-striped這個class margin-bottom為10px -->

      <div class="progress-bar progress-success" role="progressbar" 
                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:@if($project->pre_amount != 0 && $project->sponsor_projects()->first() == null){{ ($project->payamount($project))/$project->pre_amount*100 }}@elseif($project->pre_amount != 0 && $project->sponsor_projects()->count()!=0){{ ($project->payamount($project)+$response2[$key]->like_count*10+$response2[$key]->share_count*20)/$project->pre_amount*100 }}@else 0 @endif%;">
                <span class="sr-only">40% Complete</span>
              </div>
            </div>
            <b>{{ $project->name }}</b><br>
            <table class="project-status"><tr><td>已完成</td><td>金額達</td><td>贊助人數</td></tr>
             <!-- css中增加project-status這個class-->
                <tr>
                         <td>@if($project->pre_amount != 0)@if($project->sponsor_projects()->first() == null){{number_format(($project->payamount($project))/$project->pre_amount*100, 2)  }}@else{{number_format(($project->payamount($project)+$response2[$key]->like_count*10+$response2[$key]->share_count*20)/$project->pre_amount*100, 2)  }}@endif @else 0 @endif %</td>
                    <td>$@if($project->sponsor_projects()->first() == null){{ $project->payamount($project) }}@else{{ $project->payamount($project)+$response2[$key]->like_count*10+$response2[$key]->share_count*20 }}@endif</td>
                <td>{{ $project->payments()->where('project_id',$project->id)->count()}}人</td>
                </tr>
            </table>        
              </a>
    </div>
     @endforeach
    </div>   



    <div class="well container project_index_border div_background" style="word-break:break-all;">
      <legend><center><h1>熱門項目</h1></center></legend> 
       
    @foreach($projects as $key => $project) 
    <div class="col-md-3">
    <div class="ribbon-wrapper-green">
         @if(($project->sponsor_projects()->first()!=null&&$project->status!=5) || $project->status==3)<div class="ribbon-green rgreen">@if($project->status==3)募資完成@else已贊助@endif</div>@endif
      </div>
         <a href="/projects/{{ $project->id }}/1" class="thumbnail project_border">  
                <img class="img-responsive" src="{{ $project->cover_img_path}}">
                <p style="height:57px">{{ str_limit($project->outline, $limit = 47)}}.....</p> 
                <div class="progress progress-striped"> 
                  
                   <!-- css中改progress-striped這個class margin-bottom為10px -->

      <div class="progress-bar progress-success" role="progressbar" 
                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:@if($project->pre_amount != 0 && $project->sponsor_projects()->first() == null){{ ($project->payamount($project))/$project->pre_amount*100 }}@elseif($project->pre_amount != 0 && $project->sponsor_projects()->count()!=0){{ ($project->payamount($project)+$response1[$key]->like_count*10+$response1[$key]->share_count*20)/$project->pre_amount*100 }}@else 0 @endif%;">
                <span class="sr-only">40% Complete</span>
              </div>
            </div>
            <b>{{ $project->name }}</b><br>
            <table class="project-status"><tr><td>已完成</td><td>金額達</td><td>贊助人數</td></tr>
             <!-- css中增加project-status這個class-->
                <tr>
                         <td>@if($project->pre_amount != 0)@if($project->sponsor_projects()->first() == null){{number_format(($project->payamount($project))/$project->pre_amount*100, 2)  }}@else{{number_format(($project->payamount($project)+$response1[$key]->like_count*10+$response1[$key]->share_count*20)/$project->pre_amount*100, 2)  }}@endif @else 0 @endif %</td>
                    <td>$@if($project->sponsor_projects()->first() == null){{ $project->payamount($project) }}@else{{ $project->payamount($project)+$response1[$key]->like_count*10+$response1[$key]->share_count*20 }}@endif</td>
                <td>{{ $project->payments()->where('project_id',$project->id)->count()}}人</td>
                </tr>
            </table>        
              </a>
    </div>
    
    @endforeach
    </div>   



    <div class="well container project_index_border div_background" style="word-break:break-all;">
      <legend><center><h1>成功案例</h1></center></legend>  

   @foreach($projects_done as $key => $project) 
   
   <div class="col-md-3">
   <div class="ribbon-wrapper-green">
         @if(($project->sponsor_projects()->first()!=null&&$project->status!=5) || $project->status==3)<div class="ribbon-green rgreen">@if($project->status==3)募資完成@else已贊助@endif</div>@endif
      </div>
         <a href="/projects/{{ $project->id }}/1" class="thumbnail project_border">  
                <img class="img-responsive" src="{{ $project->cover_img_path}}">
                <p style="height:57px">{{ str_limit($project->outline, $limit = 47)}}.....</p> 
                <div class="progress progress-striped"> 
                  
                   <!-- css中改progress-striped這個class margin-bottom為10px -->

      <div class="progress-bar progress-success" role="progressbar" 
                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:@if($project->pre_amount != 0 && $project->sponsor_projects()->first() == null){{ ($project->payamount($project))/$project->pre_amount*100 }}@elseif($project->pre_amount != 0 && $project->sponsor_projects()->count()!=0){{ ($project->payamount($project)+$response3[$key]->like_count*10+$response3[$key]->share_count*20)/$project->pre_amount*100 }}@else 0 @endif%;">
                <span class="sr-only">40% Complete</span>
              </div>
            </div>
            <b>{{ $project->name }}</b><br>
            <table class="project-status"><tr><td>已完成</td><td>金額達</td><td>贊助人數</td></tr>
             <!-- css中增加project-status這個class-->
                <tr>
                         <td>@if($project->pre_amount != 0)@if($project->sponsor_projects()->first() == null){{number_format(($project->payamount($project))/$project->pre_amount*100, 2)  }}@else{{number_format(($project->payamount($project)+$response3[$key]->like_count*10+$response3[$key]->share_count*20)/$project->pre_amount*100, 2)  }}@endif @else 0 @endif %</td>
                    <td>$@if($project->sponsor_projects()->first() == null){{ $project->payamount($project) }}@else{{ $project->payamount($project)+$response3[$key]->like_count*10+$response3[$key]->share_count*20 }}@endif</td>
                <td>{{ $project->payments()->where('project_id',$project->id)->count()}}人</td>
                </tr>
            </table>        
              </a>
    </div>
    
    @endforeach
   </div>   


    <div class="well container project_index_border div_background" style="word-break:break-all;">
      <legend><center><h1>贊助商</h1></center></legend>  

@foreach($sponsors as $sponsor)   
   <div class="col-md-2">
     <div class="thumbnail project_border">
          <img class="img-responsive" src="{{ $sponsor->logo_path}}" style="width:100%;height:20%;">
               <center><h4>{{$sponsor->company_name}} </h4></center>
          </div>       
    </div> 
@endforeach






  
    </div>     

</div>
@endsection
