
<div class="col-md-6 column create-form">  <!--增加create-form -->
				<div class="form-group">
					{!! Form::label('name', '申請人：',array('class' => 'control-label col-md-3 column')) !!}
					<div class="col-md-9 column">
					{!! Form::text('name', null,array('class' => 'form-control','placeholder'=>'請輸入申請身份')) !!} </p >
					<p class="help-block">法人請填公司名稱</p>
					</div>		
				</div>
				<div class="form-group">
					{!! Form::label('id_no', '身份證號碼：',array('class' => 'control-label col-md-3 column')) !!}
					<div class="col-md-9 column">
					{!! Form::text('id_no', null,array('class' => 'form-control','placeholder'=>'請輸入申請身份證號')) !!} </p >
					<p class="help-block">法人請填統一編號</p>
					</div>		
				</div>
				<div class="form-group">
					{!! Form::label('email', 'Email：',array('class' => 'control-label col-md-3 column')) !!}
					<div class="col-md-9 column">
					{!! Form::text('email', null,array('class' => 'form-control','placeholder'=>'請輸入電子信箱')) !!} </p >
					</div>		
				</div>
				<div class="form-group">
					{!! Form::label('phone_no', '聯絡電話：',array('class' => 'control-label col-md-3 column')) !!}
					<div class="col-md-9 column">
					{!! Form::text('phone_no', null,array('class' => 'form-control','placeholder'=>'請輸入聯絡電話')) !!} </p >
					</div>		
				</div>
				<div class="form-group">
					{!! Form::label('introduction', '背景介紹：',array('class' => 'control-label col-md-3 column')) !!}
					<div class="col-md-9 column">
					{!! Form::textarea('introduction',null,array('class' => 'form-control','placeholder'=>'請輸入個人或公司的背景')) !!} </p >
					<p class="help-block">上限1000字</p>
					</div>		
				</div>

				<div class="form-group"> 
    			<div class="col-sm-3 btn pull-right">
					{!! Form::submit($submitButtonText,array('class' => 'btn btn-primary btn-block')) !!}
				</div>
    			</div>	
   </div>
			<div class="col-md-5 column create-guide">  <!--增加create-guide -->
				* 發起人姓名： <br>
				發起人姓名將會出現在專案名稱下方的「發起者」位置。建議使用您的中文或英文姓名，
				讓您的朋友找得到您，也讓瀏覽者對您有一份信任！<br><br>

				* 身分證字號： <br>
				將單純做為Red Turtle對發起人身分驗證用途，不會向專案瀏覽者或贊助者公開。
				專案募款成功後，Red Turtle會請專案發起人提供身分證影本，以核對發起人身分證字號與本欄位資料是否相符。
				若身分證字號不符，我們將無法進行集資款項撥款。<br>

				* 電子信箱及連絡電話： <br>
				將單純做為Red Turtle與專案發起人聯繫使用，不會向專案瀏覽者或贊助者公開。<br><br>
			</div>
