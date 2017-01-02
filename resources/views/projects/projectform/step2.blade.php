
<div class="col-md-12 row create-form">  
				<div class="form-group">
					{!! Form::label('video_link', '影片鏈接：',array('class' => 'control-label col-md-2 column')) !!}
					<div class="col-md-10 column">
					{!! Form::text('video_link', null,array('class' => 'form-control','placeholder'=>'請填入Youtube的影片地址')) !!} </p >
					<p class="help-block">請填寫嵌入程式碼網址</p>
					</div>		
				</div>


			</div>
			<div  class="col-md-2 row"></div>
			<div class=" col-md-9 create-guide" >  
			<p>用影片來傳達您的募資目的及資金用途，可以讓瀏覽者在短短的2~3分鐘內，
			了解發起這專案的原由，因而可以有效提升募資達成率。
			錄製影片並不須動用昂貴的專業攝影器材，您可用下例二種方式來製作：<br>
			1.用手機或數位相機錄製影片。
			2.您也可直接將投影片錄製成自動播放的影片。</p>
			</div>
			<div class="col-md-12 row create-form">  
				<div class="form-group">
						{!! Form::label('content', '項目內容：',array('class' => 'control-label col-md-2 column')) !!}
						<div class="col-md-10 column">
						{!! Form::textarea('content',null,array('class' => 'form-control')) !!} </p >
						<!--<p class="help-block">我不會插那個奇怪的東西</p>-->
						</div>		
					</div>

				<div class="form-group"> 
    			<div class="col-sm-2 btn pull-right">
					{!! Form::submit($submitButtonText,array('class' => 'btn btn-primary btn-block')) !!}
				</div>
    			</div>		
			</div>