<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'cbr-accountability-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
		)); ?>

					<?php echo $form->textFieldRow($model,'cbr_id',array('class'=>'span5')); ?>
		
					<?php echo $form->textFieldRow($model,'fta',array('class'=>'span5','maxlength'=>45)); ?>
		
					<?php echo $form->textFieldRow($model,'aid',array('class'=>'span5','maxlength'=>45)); ?>
		
					<?php echo $form->textFieldRow($model,'amt',array('class'=>'span5','maxlength'=>45)); ?>
		
					<?php echo $form->textFieldRow($model,'toi',array('class'=>'span5','maxlength'=>45)); ?>
		
					<?php echo $form->textFieldRow($model,'prf',array('class'=>'span5','maxlength'=>45)); ?>
		
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

