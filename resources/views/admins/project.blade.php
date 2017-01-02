@extends('layouts.admin')

@section('admin_content')


<div class="container">
  <h2>項目管理</h2>
  <p>管理你的項目</p>
@if($myprofiledata->permission == '1')      
      <div class="col-md-12 column">  
        <div class="dropdown pull-right">  <!-- dropdown 加 margin-bottom：10px -->
             <button type="button" class="btn dropdown-toggle" id="rank" 
                data-toggle="dropdown">    
                @if($status != '0'&&$status != '1'&&$status != '2'&&$status != '3'&&$status != '4'&&$status != '5')所有項目@endif
                @if($status == '0')暫存@endif
                @if($status == '1')待審中@endif
                @if($status == '2')進行中@endif
                @if($status == '3')完成@endif
                @if($status == '4')精選項目@endif
                @if($status == '5')已下架@endif
                <span class="caret"></span>
             </button>
             <ul class="dropdown-menu" role="menu" aria-labelledby="rank">
                <li role="presentation">
                   <a  href="/admin/project/6">所有項目</a>
                </li>
                <li role="presentation">
                   <a  href="/admin/project/0">暫存</a>
                </li>
                <li role="presentation">
                   <a href="/admin/project/1">
                      待審中
                   </a>
                </li>
                <li role="presentation">
                   <a href="/admin/project/2">
                      進行中
                   </a>
                </li>
                <li role="presentation">
                   <a href="/admin/project/3">
                      完成
                   </a>
                </li>
                <li role="presentation">
                   <a href="/admin/project/4">
                      精選項目
                   </a>
                </li>
                <li role="presentation">
                   <a href="/admin/project/5">
                      已下架
                   </a>
                </li>
             </ul>
        </div>
      </div>
@endif
        
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>編號</th>
        <th>項目名稱</th>
        <th>已募金額</th>
        <th>提案者</th>
        <th>狀態</th>
        @if($myprofiledata->permission == '1')
        <th>贊助商</th>
        @endif
        <th>操作</th>
      </tr>
    </thead>
    <tbody>



@if($myprofiledata->permission == '2')
 @foreach($projects2 as $project)
 @if($project->suggestions()->where('user_id',Auth::user()->id)->where('project_id',$project->id)->count()!=0)



      <tr>
        <td>{{ $project->id }} </td>
        <td>{{ $project->name }}</td>
        <td>$0</td>
        <td><a  href="{{ route('starter.edit', $project->starter_id) }}">{{ $starter->where('id',$project->starter_id)->first()->name }}</a></td>
        <td>@if($project->status == 0)暫存
        @elseif($project->status == 1)待審中 
        @elseif($project->status == 2)進行中
        @elseif($project->status == 3)完成
        @elseif($project->status == 4)精選項目
        @elseif($project->status == 5)已下架
        @endif

        
        </td>
        <td><a href="{{ route('admin.project.show', $project->id) }}" type="button"  data-toggle="tooltip" title="查看">
             <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </a>
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('suggestion.edit', $project->suggestions()->first()->id)  }}" type="button"  data-toggle="tooltip" title="審查">
            <span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>
        </a>


      </tr>     
@endif  
 @endforeach

 @else


  @foreach($projects as $key => $project)
              <tr>
                    <td>{{ $project->id }} </td>
                    <td>{{ $project->name }}</td>
                    <td>$@if($project->sponsor_projects()->first() == null){{ $project->payamount($project) }}@else{{ $project->payamount($project)+$response[$key]->like_count*10+$response[$key]->share_count*20 }}@endif</td>
                    <td><a  href="{{ route('starter.edit', $project->starter_id) }}">{{ $starter->where('id',$project->starter_id)->first()->name }}</a></td>
                    <td>@if($project->status == 0)暫存
                    @elseif($project->status == 1)待審中 
                    @elseif($project->status == 2)進行中
                    @elseif($project->status == 3)完成
                    @elseif($project->status == 4)精選項目
                    @elseif($project->status == 5)已下架
                    @endif
                    </td>

                    <td>@if($project->sponsor_projects()->first() != null){{ $project->sponsors()->first()->company_name }}@else 無 @endif</td>

                    <td><a href="{{ route('admin.project.show', $project->id) }}" type="button"  data-toggle="tooltip" title="查看">
                         <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </a>
           
                    &nbsp;&nbsp;&nbsp;&nbsp;<a href="/project/edit/{{ $project->id }}/1" type="button"  data-toggle="tooltip" title="編輯">
                         <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                    </a>
       
                    &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('suggestion.store', $project->id)  }}" type="button"  data-toggle="tooltip" title="審查">
                        <span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>
                    </a>
            
                    &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('admin.project.destroy', $project->id) }}" type="button"  data-toggle="tooltip" title="刪除">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </a>
                     &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('admin.project.collection', $project->id) }}" type="button"  data-toggle="tooltip" title="精選項目">
                       <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </a>
          
                   </tr> 

  @endforeach
 
@endif 
  </tbody>

  </table>
  @if($myprofiledata->permission == '2')
   <center>{!! $projects2->render() !!}</center>
  @else 
    <center>{!! $projects->render() !!}</center>
  @endif  
</div>

@endsection
