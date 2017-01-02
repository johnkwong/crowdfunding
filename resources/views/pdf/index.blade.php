<!DOCTYPE html>
<html lang="zh">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style>
    @font-face {
      font-family: 'Noto Sans';
      font-style: normal;
      font-weight: 400;
      src: url(http://eclecticgeek.com/dompdf/fonts/cjk/fireflysung.ttf) format('truetype');
    }
    * {
      font-family: Noto Sans, DejaVu Sans, sans-serif;
    }


  </style>
   
    <title>Wefund 審查項目清單</title>
    
  </head>

  <body style="width: 600px;">
	Wefund 審查項目表 <br/>
	項目編號：  {{ $project->id }}<br/>
<br/>

	**項目發起者資料** <br/>
  <table style="width:100%;word-break:break-all;" border="0.5" CELLSPACING="0">
   <tr>
<td>□</td>	<td style="width:30%">發起人名稱</td> <td style="width:65%;">{{ $starter->name }}</td>
 </tr>
  <tr>
<td>□</td><td>身份證號碼 </td><td>{{ $starter->id_no }}</td>
</tr>
  <tr>
<td>□</td><td>電子郵件</td><td>{{ $starter->email }}</td>
  </tr>
    <tr>
<td>□</td><td>電話號碼</td><td>{{ $starter->phone_no }}</td>
  </tr>
    <tr>
<td>□</td><td>背景介紹</td><td>{!! nl2br(e($starter->introduction)) !!}</td>
     </tr>
</table>	<br/>

**項目資料**<br/>
<table style="width:100%;word-break:break-all;" border="0.5" CELLSPACING="0">
 <tr>
<td>□</td><td>項目名稱</td> <td>{{ $project->name }} </td>
 </tr>
  <tr>
<td>□</td><td>項目分類</td> <td>{{ $project->class }} </td>
 </tr>
  <tr>
<td>□</td><td>預計募資資金</td> <td>{{ $project->pre_amount }}</td>
 </tr>
  <tr>
<td>□</td><td>項目起始日期 </td><td>{{ $project->start_date }} </td>
 </tr>
  <tr>
<td>□</td><td>項目結束日期</td> <td>{{ $project->end_date }} </td>
 </tr>
  <tr>
<td>□</td><td>概要</td> <td>{!! nl2br(e($project->outline)) !!} </td>
 </tr>
  <tr>
<td>□</td><td>內容 </td><td>{!! nl2br(e($project->content)) !!}</td>
 </tr>
  <tr>
<td>□</td><td>Youtube影片位置</td> <td>{{ $project->video_link }} </td>
 </tr>
  <tr>
<td>□</td><td>圖片</td> <td><img src="http://wefund.dev/{{ $project->cover_img_path }}" style="width:250px;height:250px;"> </td>
 </tr>
</table>  <br/>

**項目回饋設置**<br/>

<table style="width:100%" border="0.5" CELLSPACING="0">
 <tr>
   <td></td>
    <td style="width:20%">回饋金額</td>
    <td>回饋圖片</td>   
    <td>回饋描述</td>
  </tr>
@foreach($project->project_rewards()->get() as $reward)  

  <tr>
    <td>□</td>
    <td>{{ $reward->reward_amount }}</td>
    <td>@if($reward->reward_img!="")<img src="http://wefund.dev/{{ $reward->reward_img }}" style="width:180px;height:180px;margin-bottom:10px;" >@else 無@endif</td>    
    <td>{{ $reward->reward_introduction }}</td>
  </tr>


@endforeach
</table>

<br/><br/>

	<hr>
是否通過項目 □ 是 □ 否 <br/>
	審查人員：<br/>
	簽名＿＿＿＿＿＿<br/>
	日期＿＿＿＿＿＿<br/>

	<hr>
	＊此乃公司內部文件， 不能公開或外漏
	<br/ >
<br/ >
	<center>Copyright © 2015 by Wefund</center>
<br/ ><br/ >
	</p>
</div>
  </body>
</html>
