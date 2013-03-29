<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Form Mutasi Karyawan</p>
		</div>
		<div class="widget-content">
			<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
				'id'=>'cbr-form',
				'type'=>'horizontal',
				'enableAjaxValidation'=>true,
			)); ?>
			
			<div class="control-group">
				<label class="control-label" for="PPerson_user_id">Nama Karyawan</label>
				<div class="controls">
				<?php $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
				    'name' => 'user',
				    'value' => '',
				    'sourceUrl' => $this->createUrl('/pim/pPerson/lookup'),
				    'options' => array(
				    	'showAnim' => 'fold',
				    	'minLength'=>'2',
				    	'select'=>'js:function( event, ui ) {  
			                       $("#PPerson_jabatan_id").val(ui.item.id);  
			                       $("#user").val(ui.item.value);  
			                       return false;  
			                  }',
				    	),
				     'htmlOptions' => array(
				     	'style' => 'height:20px; z-index: 4;'
				     	),
				    )); ?>
				    <input type="hidden" readonly="readonly" size="2" maxlength="2" name="PPerson[id]" id="PPerson_jabatan_id">
				</div>
			</div>
			
			<?php //$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Submit')); ?>
			<?php
			echo CHtml::ajaxSubmitButton('Submit',CController::createUrl('rolling/AjaxUpdate'),
				array(
					'type'=>'POST',
					'url'=>'CController::createUrl("rolling/AjaxUpdate")',
					'update' => '#data',                    
					'beforeSend'=>'js:function(data) { $("#data").show(400); }'
				),
				array(
					'class'=>'btn',
				)
			);
			?>
			<?php $this->endWidget(); ?>
		</div>
	</div>
</div>

<div id="data" style="display:none;">
   <?php $this->renderPartial('_ajaxContent', array('myValue'=>$myValue)); ?>
</div>