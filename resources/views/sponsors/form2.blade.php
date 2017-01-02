


			<div class="form-group">
				{!! Form::label('amount', '贊助金額：',array('class' => 'control-label col-md-3 column')) !!}
				<div class="col-md-9 column">
					{!! Form::text('amount', null,array('class' => 'form-control','placeholder'=>'請輸入贊助金額')) !!} </p >
					<p class="help-block">最低為3000元</p>
				</div>		
			</div>
			<div class="form-group">
				{!! Form::label('messages', '對項目發起者說的話',array('class' => 'control-label col-md-3 column')) !!}
				<div class="col-md-9 column">
					{!! Form::textarea('messages', null,array('class' => 'form-control','placeholder'=>'請輸入對項目發起者說的話')) !!} </p >
					
				</div>		
			</div>
			<div class="form-group">        
		      <div class="col-sm-offset-3 col-sm-9">
					{!! Form::checkbox('agree', true) !!} 
					茲同意本網站之<a href="#modal-sponsor" class="modal-toggle" data-toggle="modal">《贊助商贊助契約書》</a></p >
		    	</div>
   			</div>

			<div class="form-group">
			<div class="col-md-3 column above-footer pull-right">  
				{!! Form::submit($submitButtonText,array('class' => 'btn btn-primary btn-block'))	 !!} 			
			</div>
			</div>



<div id="modal-sponsor" class="modal">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
             <h3>贊助商贊助契約書</h3>
        </div>
        <div class="modal-body">

        		<p>一、贊助申請資格</p>

<p>(一)贊助者必須是具備完全行為能力的自然人、或合法登記的法人或團體。</p>
 
<p>(二) 贊助者應擔保其所提供的所有資料，均為正確且即時的資料；如贊助者所提供的資料事後有變更，贊助者應即時聯絡本系統之管理員，請管理員協助更新資料。如贊助者未即時提供資料、未按指定方式提供資料、所提供之資料不正確或與事實不符、或未即時更新資料，Wefund 得不經事先通知，隨時拒絕、或暫停對該贊助者提供本服務之全部或一部。</p>

<p>二、損害賠償違約金 

<p>乙方若無依承諾付給發起者贊助金額，應以 提案者 所受損害(含律師費用)或贊助者所受利益，兩者取其高，作為給付 提案者 之損害賠償金。</p> 

<p>三、贊助注意事項

<p>贊助者確認贊助後，不得取消其贊助，贊助金額確認後亦不得修改，以免造成提案者的權益損失，以及其他使用者的不便。</p>


             
        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" aria-hidden="true" class="close">同意</a>
        </div>
      </div>
    </div>
</div>