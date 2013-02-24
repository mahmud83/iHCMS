<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'woccupation-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
		)); ?>

					<?php echo $form->textFieldRow($model,'code',array('class'=>'span5','maxlength'=>45)); ?>
		
					<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>200)); ?>
		
					<?php echo $form->textFieldRow($model,'level',array('class'=>'span5')); ?>
		
					<?php //echo $form->textFieldRow($model,'parent',array('class'=>'span5')); ?>
					
					<?php echo $form->dropDownListRow($model, 'parent', CHtml::listData(wOccupation::model()->findAll(), 'id', 'name'), array('prompt'=>'Head')); ?>
		
					<?php //echo $form->textFieldRow($model,'w_unit_id',array('class'=>'span5')); ?>
					
					<?php echo $form->dropDownListRow($model, 'w_unit_id', CHtml::listData(wUnit::model()->findAll(), 'id', 'name'), array('prompt'=>'Please Select')); ?>
					
					<?php echo $form->dropDownListRow($model, 'job_family', CHtml::listData(WJobFamily::model()->findAll(), 'id', 'name'), array('prompt'=>'Please Select')); ?>
		
				<div class="control-group">
			<div class="controls">
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

