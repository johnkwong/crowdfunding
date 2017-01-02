
				<div class="col-md-6 column create-form"> 
					<div class="form-group">
						{!! Form::label('reward_amount', '贊助金額：',array('class' => 'control-label col-md-4 column')) !!}
						<div class="col-md-8 column">
						{!! Form::text('reward_amount', null,array('class' => 'form-control','placeholder'=>'這個回饋所需要的金額')) !!} </p >
						
						</div>		
					</div>
					<div class="form-group">
						{!! Form::label('reward_img', '回饋圖片：',array('class' => 'control-label col-md-4 column')) !!}
						<div class="col-md-8 column">
							<div class="col-md-8 column">
								{!! Form::file('reward_img')!!}</div>
							 <div class="col-md-4 column">
				
							</div>
						</div>		
					</div>
					<div class="form-group">
						{!! Form::label('reward_introduction', '回饋描述：',array('class' => 'control-label col-md-4 column')) !!}
						<div class="col-md-8 column">
						{!! Form::textarea('reward_introduction', null,array('class' => 'form-control','placeholder'=>'請輸入你對該回饋的描述')) !!} </p >
						</div>		
					</div>
					<div class="form-group"> 
    				<div class="col-sm-3 btn pull-right">
						{!! Form::submit($submitButtonText,array('class' => 'btn btn-primary btn-block')) !!}
					</div>

					</div>
				</div>
				<div class="col-md-6 column create-help">

					專案的回饋敘述應該怎麼寫？<br><br>

					須包含：回饋內容(物、事件、或感謝)、取得回饋應支付的贊助金額、
					限量與否、預計完成的時間。
				</div>
				<div class="col-md-12 column">
    		
				
			</div>
			</div>
			<hr>