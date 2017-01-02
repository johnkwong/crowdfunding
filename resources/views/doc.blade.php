@extends('master')

@section('content')
<div class="col-md-12" style="margin-bottom:30px;">

		<center><h1>流程簡介</h1></center>
</div>

<div class="row clearfix">
<div class="col-sm-offset-1 col-sm-10">


<div class="col-md-2">
  <ul class="nav nav-pills nav-stacked">
    <li data-toggle="pill" href="#home" class="active"><a href="#">提案流程</a></li>
    <li><a data-toggle="pill" href="#menu1">支持者贊助流程</a></li>
    <li><a data-toggle="pill" href="#menu2">贊助者贊助流程</a></li>
    <li><a data-toggle="pill" href="#menu3">計劃書範例</a></li>
  </ul>
</div>

<div class="well col-sm-offset-2 div_background">
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">

         <legend>提案流程</legend>
<div class="thumbnail col-md-12"> 
   <h4 ><b>1.群眾募資平台Wefund提案契約書</b></h4><p>
   <h5>群眾募資平台Wefund提案契約書點選同意進行提案。</h5>
</div>	

<div class="thumbnail"> 
   <h4 ><b>2.發起者信息</b></h4><p>
   <h5>若已經有發起者身分可以選擇舊有的發起者身分，或填寫新的發起者身分。</h5>
	<img src="imgs/process/01.png" style="width:800px;height:500px;">
</div>		

<div class="thumbnail"> 
<h4><b>3.項目簡介</h4></b><p>	
<h5>填寫項目名稱、項目類別、預計募資金額、項目摘要、募資開始時間、募資結束時間與項目封面。</h5>
		<img src="imgs/process/02.png" style="width:800px;height:500px;">
</div>	

<div class="thumbnail"> 
	<h4><b>4.項目大綱</h4></b><p>
	<h5>填寫影片鏈接與項目內容。</h5>
	<img src="imgs/process/03.png" style="width:800px;height:500px;">		
</div>	

<div class="thumbnail"> 
	<h4><b>5.回饋設置</h4></b><p>
	<h5>填寫回饋金額、回饋圖片與回饋描述，若已確認完成新增項目請點選完成進行送審，亦或點選取消暫存項目。</h5>
	<img src="imgs/process/04.png" style="width:800px;height:500px;">	
</div>	

</div>
   
<div id="menu1" class="tab-pane fade">

<legend>支持者贊助流程</legend>

<div class="thumbnail"> 
<h4><b>1.選擇贊助方式</h4></b><p>
<h5>可選擇Facebook按讚或分享來支持，或者選擇贊助回饋金額進行實質金錢援助。</h5>

<img src="imgs/process/12.png" style="width:800px;height:500px;">
</div>

<div class="thumbnail"> 
	<h4><b>2.填寫付款資訊</h4></b><p><br>
	<h5>可選擇填寫額外贊助，並填寫個人資訊和選擇付款方式。</h5>
		<img src="imgs/process/20.png" style="width:800px;height:500px;">
</div>

<div class="thumbnail"> 
	<h4><b>3.確認付款</h4></b><p><br>
	<h5>確認付款資訊。</h5>
		 <img src="imgs/process/21.png" style="width:800px;height:500px;">
</div>

<div class="thumbnail"> 
	<h4><b>4.填寫信用卡資訊</h4></b><p>
		<h5>若選擇信用卡付款則填寫填寫信用卡資訊。</h5>
		 <img src="imgs/process/22.png" style="width:800px;height:500px;">
</div>

<div class="thumbnail"> 
	<h4><b>5.登入支付寶</h4></b><p>
		<h5>若選擇信用卡付款則進入支付寶登入畫面。</h5>

		 <img src="imgs/process/23.png" style="width:800px;height:500px;">
</div>

</div>





 <div id="menu2" class="tab-pane fade">

      <legend>赞助商赞助流程</legend>

<div class="thumbnail"> 
<h4><b>1. 選擇贊助項目</b></h4><p>
<h5>從項目總覽尚未開始分類選擇尚未贊助的項目。</h5>
<img src="imgs/process/6.png" style="width:800px;height:500px;">
</div>
<div class="thumbnail"> 
	<h4><b>2. 點選我要贊助</b></h4>	<p>
	<h5>進入項目主頁，點選我要贊助進行贊助。</h5>
<img src="imgs/process/7.png" style="width:800px;height:500px;">

</div>
<div class="thumbnail"> 
	<h4><b>3. 填寫贊助商資訊</b></h4><p>
	<h5>若已經有贊助商身分可以選擇舊有的贊助商身分，或填寫新的贊助商身分。</h5>
<img src="imgs/process/13.png" style="width:800px;height:500px;">
</div>
<div class="thumbnail"> 
	<h4><b>4. 填寫贊助資訊</b></h4><p>
	<h5>填寫贊助金額和對項目發起者說的話。</h5>
<img src="imgs/process/8.png" style="width:800px;height:500px;">
</div>
</div>



 <div id="menu3" class="tab-pane fade">
    
 <legend>計劃書範例</legend>

 <div class="thumbnail">
	<h4><b>1-計劃題目</b></h4>
龐大的文案內容不知從何下手嗎？
按照以下的步驟並參考不同類型的經典成功案例，構築你的文案內容吧！

一個好的標題應該要好記、好搜尋、吸引人想點進去看，並讓瀏覽者能在最短的時間內瞭解項目的核心理念。

吸引人的標題與副標：說明你的目標以及理念，強調你的獨一無二，讓贊助人對你或你的計劃好奇，願意更進一步了解項目。
 </div>

<div class="thumbnail">	
	<h4><b>2-募資金額</b></h4>
資金規劃：設定募資目標金額

評估你完成回饋所需的固定成本（產品開模、必要開銷）與變動成本（運費、回饋品的數量）、以及預期可達到的目標人數，並根據執行計劃的最低門檻列出一個保守的募資金額。設立延伸目標，評估你能回饋的數量上限。
 </div>

<div class="thumbnail">	
	<h4><b>3-計劃摘要</b></h4>
100字的簡述：點出核心目標，拉起與贊助人的連結。讓贊助人看到這個計劃的價值後，會認為這個計劃非執行不可。因此願意參與、贊助計畫。

讓贊助人能在最短的時間內瞭解提案者的想法，並知道贊助該提案所能得到的具體回饋。商品類型可以強調商品特色、社會類型可以強調背後故事以及相關議題、文藝類型可以強調表演的獨特與情感。

小祕訣：在簡述內容中，少用批評或比較的方式，而著重在你能帶來的改變。提問的口氣要像是與朋友聊天，脫口而出的疑惑，而非質疑。這樣可以減少因傳達不完全可能造成的負面印象。
 </div>

<div class="thumbnail">	
	<h4><b>4-希望開始募資時間</b></h4>
規劃募資期程

1.建立待辦事項：確保你思考過的細節不會被疏忽掉。

2.進度表：事先安排好在募資前、期間以及募資完成後要完成的項目，可以讓自己更加清楚下一步要往哪裡走，也能夠讓群眾信任該項目是有規劃的。
 </div>

<div class="thumbnail">	
	<h4><b>5-項目封面</b></h4>
『一張圖片勝過千言萬語』

一個項目是否會吸引人想點進去看，除了標題之外、封面圖片絕對是關鍵。對的圖片可以展現產品美麗的外觀、呈現計劃的遠景、傳達真摯的情感。因此選一張好的封面圖片作為項目的門面是非常重要的！

符合標題的敘述、主體清晰、畫面單純、視覺強烈，都是項目封面應該考量的要素。
 </div>


  </div>

  </div>
   </div>
</div>	
</div>	
</div>	
</p></div>
	



@endsection
