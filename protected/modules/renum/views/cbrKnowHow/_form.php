<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'cbr-know-how-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
		)); ?>

					<?php echo $form->textFieldRow($model,'cbr_id',array('class'=>'span5')); ?>
		
					<?php echo $form->textFieldRow($model,'tkh',array('class'=>'span5','maxlength'=>45)); ?>
		
					<?php echo $form->textFieldRow($model,'mkh',array('class'=>'span5','maxlength'=>45)); ?>
		
					<?php echo $form->textFieldRow($model,'hrs',array('class'=>'span5','maxlength'=>45)); ?>
		
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

