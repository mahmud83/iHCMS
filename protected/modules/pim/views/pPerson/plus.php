<?php
$this->breadcrumbs=array(
	'Ppeople'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PPerson','url'=>array('index')),
	array('label'=>'Manage PPerson','url'=>array('admin')),
);
?>

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
			
			<?php echo $form->dropDownListRow($model, 'employee_status', array('1'=>'Aktif', '2'=>'Pensiun'), array('prompt'=>'Pilih Salah Satu')); ?>
		
			<?php echo $form->textFieldRow($model,'employee_code',array('class'=>'span5','maxlength'=>45)); ?>
		
			<?php echo $form->textFieldRow($model,'firstname',array('class'=>'span5','maxlength'=>45)); ?>
		
			<?php echo $form->textFieldRow($model,'lastname',array('class'=>'span5','maxlength'=>45)); ?>
		
			<div class="control-group">
				<label class="control-label" for="PPerson_user_id">Jabatan</label>
				<div class="controls">
				<?php $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
				    'name' => 'user',
				    'value' => '',
				    'sourceUrl' => $this->createUrl('/wOccupation/lookup'),
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
				    <input type="hidden" readonly="readonly" size="2" maxlength="2" name="PPerson[jabatan_id]" id="PPerson_jabatan_id">
				</div>
			</div>
		
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

