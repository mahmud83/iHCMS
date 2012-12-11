<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'cbr-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
		)); ?>

					<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>
		
					<?php echo $form->textFieldRow($model,'jabatan_id',array('class'=>'span5')); ?>
		
					<?php echo $form->textFieldRow($model,'date',array('class'=>'span5')); ?>
		
					<?php echo $form->textFieldRow($model,'kh_score',array('class'=>'span5')); ?>
		
					<?php echo $form->textFieldRow($model,'ps_persent',array('class'=>'span5')); ?>
		
					<?php echo $form->textFieldRow($model,'ps_score',array('class'=>'span5')); ?>
		
					<?php echo $form->textFieldRow($model,'ac_score',array('class'=>'span5')); ?>
		
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

