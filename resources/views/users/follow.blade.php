@extends('layouts.user')

@section('user_content')

<div class="container">

    <div class="well row project_index_border project_index_border div_background">
      <legend>我所收藏的項目</legend>  

   @if($follow->get()->count() == 0)
      <h1>沒有收藏項目</h1>
   @endif   

 @foreach($project as $key => $project)
 
   <div class="col-md-3" style="word-break:break-all;">
   <div class="ribbon-wrapper-green">
         @if(($project->sponsor_projects()->first()!=null&&$project->status!=5) || $project->status==3)<div class="ribbon-green rgreen">@if($project->status==3)募資完成@else已贊助@endif</div>@endif
      </div>
        <a href="/projects/{{ $project->id }}/1" class="thumbnail project_border">  
                <img class="img-responsive" src="{{ $project->cover_img_path}}">
                <p style="height:57px">{{ str_limit($project->outline, $limit = 47)}}.....</p> 
                <div class="progress progress-striped"> 
                  
                   <!-- css中改progress-striped這個class margin-bottom為10px -->

      <div class="progress-bar progress-success" role="progressbar" 
                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:@if($project->pre_amount != 0 && $project->sponsor_projects()->first() == null){{ ($project->payamount($project))/$project->pre_amount*100 }}@elseif($project->pre_amount != 0 && $project->sponsor_projects()->count()!=0){{ ($project->payamount($project)+$response[$key]->like_count*10+$response[$key]->share_count*20)/$project->pre_amount*100 }}@else 0 @endif%;">
                <span class="sr-only">40% Complete</span>
              </div>
            </div>
            <b>{{ $project->name }}</b><br>
            <table class="project-status"><tr><td>已完成</td><td>金額達</td><td>贊助人數</td></tr>
             <!-- css中增加project-status這個class-->
                <tr>
                         <td>@if($project->pre_amount != 0)@if($project->sponsor_projects()->first() == null){{number_format(($project->payamount($project))/$project->pre_amount*100, 2)  }}@else{{number_format(($project->payamount($project)+$response[$key]->like_count*10+$response[$key]->share_count*20)/$project->pre_amount*100, 2)  }}@endif @else 0 @endif %</td>
                    <td>$@if($project->sponsor_projects()->first() == null){{ $project->payamount($project) }}@else{{ $project->payamount($project)+$response[$key]->like_count*10+$response[$key]->share_count*20 }}@endif</td>
                <td>{{ $project->payments()->where('project_id',$project->id)->count()}}人</td>
                </tr>
            </table>        
              </a>
    </div>

   @endforeach
     
 

</div>
</div>

@endsection

