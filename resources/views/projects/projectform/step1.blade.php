
<div class="col-md-6 column create-form">  
	@if($project->cover_img_path != '')
		{!! Form::hidden('has_img', '1') !!}
	@endif

				<div class="form-group">
					{!! Form::label('name', '項目名稱：',array('class' => 'control-label col-md-4 column')) !!}
					<div class="col-md-8 column">
					{!! Form::text('name', null,array('class' => 'form-control','placeholder'=>'請輸入你的項目名稱')) !!} </p >
					</div>		
				</div>
				<div class="form-group">
					{!! Form::label('class', '項目類別：',array('class' => 'control-label col-md-4 column')) !!}
					<div class="col-md-8 column">
					{!! Form::select('class', ['請選擇類別','社會人文','科學技術','音樂影視','設計繪畫','舞台演出','休閒娛樂','主題旅行'], null, ['class' => 'form-control']) !!} </p >					
					</div>		
				</div>
				<div class="form-group">
					{!! Form::label('pre_amount', '預計募資金額：',array('class' => 'control-label col-md-4 column')) !!}
					<div class="col-md-8 column">
					{!! Form::text('pre_amount', null,array('class' => 'form-control','placeholder'=>'以台幣為單位')) !!} </p >
					<p class="help-block">最低為5000元</p>
					</div>		
				</div>	
				<div class="form-group">
					{!! Form::label('outline', '項目摘要：',array('class' => 'control-label col-md-4 column')) !!}
					<div class="col-md-8 column">
					{!! Form::textarea('outline',null,array('class' => 'form-control')) !!} </p >
					<p class="help-block">上限255字</p>
					</div>		
				</div>
				<div class="form-group">
					{!! Form::label('start_date', '募資開始時間：',array('class' => 'control-label col-md-4 column')) !!}
					<div class="col-md-8 column">
					{!! Form::input('date','start_date',null,array('class' => 'form-control')) !!} </p >
					</div>		
				</div>	
				<div class="form-group">
					{!! Form::label('end_date', '募資結束時間：',array('class' => 'control-label col-md-4 column')) !!}
					<div class="col-md-8 column">
					{!! Form::input('date','end_date',null,array('class' => 'form-control')) !!} </p >
					</div>		
				</div>	
				<div class="form-group">
					{!! Form::label('cover_img_path', '項目封面：',array('class' => 'control-label col-md-4 column')) !!}
					<div class="col-md-8 column">
						<div class="col-md-7 column">
							{!! Form::file('cover_img_path', ['id' => 'file'])!!}</div>
						 <div class="col-md-1 column">
							</div>
					</div>		
				</div>

				<div class="form-group"> 
    			<div class="col-sm-3 btn pull-right">
					{!! Form::submit($submitButtonText,array('class' => 'btn btn-primary btn-block')) !!}
				</div>
    			</div>

						
			</div>
				<div class="col-md-5 column create-guide">  
				@if($project->cover_img_path == '')
					<div id="image_preview"><img id="previewing" src="/images/dafault/nodefaultimg.gif" /></div>
				@else
					<div id="image_preview" ><img height="330" width="350" id="previewing" src="{{ $project->cover_img_path }}" /></div>
				@endif
			   </div>		

