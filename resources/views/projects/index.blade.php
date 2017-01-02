@extends('master')

@section('content')

		<div class="jumbotron" style="background-image:url('/images/dafault/sky2.png');background-size: 100% 100%;">
				<center><h1>項目總覽</h1></center>
			</div>


<div class="container ">      <!-- css中增加itemcontainer這個class-->
	<div class="row clearfix">	
	
		<div class="col-md-2  column list-group">
			<h3>分類</h3><br>
			<a href="/project/0/{{ $sort }}" class="list-group-item active">項目狀態</a>
			<a @if($class == 'hot'){!! "class='list-group-item-info list-group-item'" !!}@endif href="/project/hot/{{ $sort }}" class="list-group-item">熱門項目</a>
			<a @if($class == 'nonbegin'){!! "class='list-group-item-info list-group-item'" !!}@endif href="/project/nonbegin/{{ $sort }}" class="list-group-item">尚未開始<!--<span class="badge">{{$project->where('class','1')->count()}}</span>--></a>
			<a @if($class == 'status2'){!! "class='list-group-item-info list-group-item'" !!}@endif href="/project/status2/{{ $sort }}" class="list-group-item">正在募資</a>
			<a @if($class == 'status3'){!! "class='list-group-item-info list-group-item'" !!}@endif href="/project/status3/{{ $sort }}" class="list-group-item">已經結束</a><hr>

			<a href="/project/0/{{ $sort }}" class="list-group-item active">項目種類</a>
			<a @if($class == 1){!! "class='list-group-item-info list-group-item'" !!}@endif href="/project/1/{{ $sort }}" class="list-group-item">社會人文</a>
			<a @if($class == 2){!! "class='list-group-item-info list-group-item'" !!}@endif href="/project/2/{{ $sort }}" class="list-group-item">科學技術</a>
			<a @if($class == 3){!! "class='list-group-item-info list-group-item'" !!}@endif href="/project/3/{{ $sort }}" class="list-group-item">音樂影視</a>
			<a @if($class == 4){!! "class='list-group-item-info list-group-item'" !!}@endif href="/project/4/{{ $sort }}" class="list-group-item">設計繪畫</a>
			<a @if($class == 5){!! "class='list-group-item-info list-group-item'" !!}@endif href="/project/5/{{ $sort }}" class="list-group-item">舞台演出</a>
			<a @if($class == 6){!! "class='list-group-item-info list-group-item'" !!}@endif href="/project/6/{{ $sort }}" class="list-group-item">休閒娛樂</a>
			<a @if($class == 7){!! "class='list-group-item-info list-group-item'" !!}@endif href="/project/7/{{ $sort }}" class="list-group-item">主題旅行</a>

		</div>

		<div class="col-md-10 column">
			
			<div class="col-md-12 column">  
				<div class="dropdown pull-right">  <!-- dropdown 加 margin-bottom：10px -->
					   <button type="button" class="btn dropdown-toggle" id="rank" 
					      data-toggle="dropdown">  			      		
					      @if($sort == 'a')按時間排序@endif
					      @if($sort == 'b')按人氣排序@endif
					      <span class="caret"></span>
					   </button>
					   <ul class="dropdown-menu" role="menu" aria-labelledby="rank">
					      <li role="presentation">
					         <a  href="a">按時間排序</a>
					      </li>
					      <li role="presentation">
					         <a href="b">
					            按人氣排序
					         </a>
					      </li>
					   </ul>
				</div>
			</div>


			@foreach($projects as $key => $project)
			<div class="col-md-4 column" style="word-break:break-all;">
			<div class="ribbon-wrapper-green">
   			 @if(($project->sponsor_projects()->first()!=null&&$project->status!=5) || $project->status==3)<div class="ribbon-green rgreen">@if($project->status==3)募資完成@else已贊助@endif</div>@endif
			</div>
				      <a href="/projects/{{ $project->id }}/1" class="thumbnail project_border div_background">   
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
<center>{!! $projects->render() !!}</center>
	</div>
</div>

@endsection
