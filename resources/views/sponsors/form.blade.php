		<div class="col-md-6 column create-form"> 
			<div class="form-group">
				{!! Form::label('company_name', '贊助公司：',array('class' => 'control-label col-md-3 column')) !!}
				<div class="col-md-9 column">
					{!! Form::text('company_name', null,array('class' => 'form-control','placeholder'=>'請輸入公司名稱')) !!} </p >
					
				</div>		
			</div>
			<div class="form-group">
				{!! Form::label('logo_path', '公司LOGO：',array('class' => 'control-label col-md-3 column')) !!}

				<div class="col-md-9 column">
				{!! Form::file('logo_path', ['id' => 'file'])!!}
				<!--<div class="col-md-7 column">
						{!! Form::file('thefile')!!}</div>
					 <div class="col-md-5 column">
						<button type="button" class="btn pull-left">上傳</button>
					</div>
				-->	
			   </div>	
			</div>
			<div class="form-group">
			<div class="col-md-3 column above-footer pull-right">  
				{!! Form::submit($submitButtonText,array('class' => 'btn btn-primary btn-block'))	 !!} 			
			</div>
			</div>
		</div>
		<div class="col-md-6 column create-form"> 
			<legend>公司LOGO預覽圖</legend>
			<div id="image_preview"><img id="previewing" src="/images/dafault/nodefaultimg.gif" /></div>
			
		</div>
	

