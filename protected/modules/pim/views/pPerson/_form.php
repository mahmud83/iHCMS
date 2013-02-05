<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'pperson-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
		)); ?>
			
			<?php //echo $form->dropDownListRow($model, 'user_id', CHtml::listData(WUser::model()->findAll(), 'id', 'username')); ?>
			<?php /*
			<div class="control-group">
				<label class="control-label" for="PPerson_user_id">User</label>
				<div class="controls">
			<?php $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
			    'name' => 'user',
			    'value' => '',
			    'sourceUrl' => $this->createUrl('/wUser/lookup'),
			    'options' => array(
			    	'showAnim' => 'fold',
			    	'minLength'=>'2',
			    	'select'=>'js:function( event, ui ) {  
                               $("#user_id").val(ui.item.id);  
                               $("#user").val(ui.item.value);  
                               return false;  
                          }',
			    	),
			     'htmlOptions' => array(
			     	'style' => 'height:20px;'
			     	),
			    )); ?>
				</div>
			</div>
			*/?>
		
			<?php //echo $form->textFieldRow($model,'jabatan_id',array('class'=>'span5')); ?>
		
			<?php //echo $form->textFieldRow($model,'avatar',array('class'=>'span5','maxlength'=>200)); ?>
			
			<?php echo $form->dropDownListRow($model, 'employee_status',
        array('1'=>'Aktif', '2'=>'Pensiun')); ?>
		
			<?php echo $form->textFieldRow($model,'employee_code',array('class'=>'span5','maxlength'=>45)); ?>
		
			<?php echo $form->textFieldRow($model,'firstname',array('class'=>'span5','maxlength'=>45)); ?>
		
			<?php echo $form->textFieldRow($model,'lastname',array('class'=>'span5','maxlength'=>45)); ?>
		
			<?php echo $form->textFieldRow($model,'nickname',array('class'=>'span5','maxlength'=>45)); ?>
			
			<?php echo $form->datepickerRow($model, 'birth_date',
        array('append'=>'<i class="icon-calendar"></i>')); ?>
		
			<?php echo $form->textFieldRow($model,'birth_place',array('class'=>'span5','maxlength'=>45)); ?>
			
			<?php echo $form->dropDownListRow($model, 'birth_place',
        CHtml::listData(WState::model()->findAll(), 'id', 'name'), array('empty'=>'please select')); ?>
		
			<?php //echo $form->textFieldRow($model,'blood_id',array('class'=>'span5','maxlength'=>5)); ?>
			
			<?php echo $form->dropDownListRow($model, 'blood_id',
        array('AB', 'A', 'B', 'O'), array('empty'=>'please select')); ?>
			
			<?php echo $form->dropDownListRow($model, 'marital_id',
        array('1'=>'Lajang', '2'=>'Menikah'), array('empty'=>'please select')); ?>
			
			<?php echo $form->dropDownListRow($model, 'sex_id',
        array('1'=>'Pria', '2'=>'Wanita'), array('empty'=>'please select')); ?>
			
			<?php echo $form->dropDownListRow($model, 'religion_id',
        array('1'=>'Islam', '2'=>'Kristen', '3'=>'Katolik', '4'=>'Hindu', '5'=>'Budha', '6'=>'Lainnya'), array('empty'=>'please select')); ?>
		
			<?php echo $form->textFieldRow($model,'address1',array('class'=>'span5','maxlength'=>255)); ?>
		
			<?php echo $form->textFieldRow($model,'address2',array('class'=>'span5','maxlength'=>255)); ?>
		
			<?php echo $form->textFieldRow($model,'pos_code',array('class'=>'span5','maxlength'=>10)); ?>
		
			<?php echo $form->textFieldRow($model,'identity_number',array('class'=>'span5','maxlength'=>40)); ?>
		
			<?php //echo $form->textFieldRow($model,'identity_valid',array('class'=>'span5')); ?>
			
			<?php echo $form->datepickerRow($model, 'identity_valid',
        array('append'=>'<i class="icon-calendar"></i>')); ?>
		
			<?php //echo $form->textFieldRow($model,'identity_state',array('class'=>'span5')); ?>
			
			<?php echo $form->dropDownListRow($model, 'identity_state', CHtml::listData(WState::model()->findAll(), 'id', 'name'), array('empty'=>'please select')); ?>
		
			<?php echo $form->textFieldRow($model,'identity_pos_code',array('class'=>'span5','maxlength'=>10)); ?>
		
			<?php echo $form->textFieldRow($model,'driver_license_number',array('class'=>'span5','maxlength'=>45)); ?>
			
			<?php echo $form->datepickerRow($model, 'driver_license_valid', array('append'=>'<i class="icon-calendar"></i>')); ?>
		
			<?php echo $form->textFieldRow($model,'email1',array('class'=>'span5','maxlength'=>50)); ?>
		
			<?php echo $form->textFieldRow($model,'email2',array('class'=>'span5','maxlength'=>50)); ?>
		
			<?php echo $form->textFieldRow($model,'phone_mobile',array('class'=>'span5','maxlength'=>20)); ?>
		
			<?php echo $form->textFieldRow($model,'phone_home',array('class'=>'span5','maxlength'=>20)); ?>
		
			<?php echo $form->textFieldRow($model,'phone_office',array('class'=>'span5','maxlength'=>20)); ?>
		
			<?php echo $form->textAreaRow($model,'custom',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
		
			<?php //echo $form->textFieldRow($model,'create_date',array('class'=>'span5')); ?>
		
			<?php //echo $form->textFieldRow($model,'create_by',array('class'=>'span5')); ?>
		
			<?php //echo $form->textFieldRow($model,'modified_date',array('class'=>'span5')); ?>
		
			<?php //echo $form->textFieldRow($model,'modified_by',array('class'=>'span5')); ?>
		
			<div class="control-group">
				<div class="controls">
					<?php echo CHtml::hiddenField('user_id',''); ?>  
					<?php $this->widget('bootstrap.widgets.TbButton', array(
						'buttonType'=>'submit',
						'type'=>'primary',
						'label'=>$model->isNewRecord ? 'Create' : 'Save',
					)); ?>
					<?php $this->widget('bootstrap.widgets.TbButton', array(
						'buttonType'=>'reset',
						'label'=>'Reset',
					)); ?>
				</div>
			</div>
		<?php $this->endWidget(); ?>
	</div>
</div>

