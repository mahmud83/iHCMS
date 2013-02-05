<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'pperson-education-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
		)); ?>

					<?php echo $form->textFieldRow($model,'person_id',array('class'=>'span5')); ?>
		
					<?php echo $form->textFieldRow($model,'level',array('class'=>'span5','maxlength'=>100)); ?>
		
					<?php echo $form->textFieldRow($model,'institution_name',array('class'=>'span5','maxlength'=>100)); ?>
		
					<?php echo $form->textFieldRow($model,'institution_major',array('class'=>'span5','maxlength'=>45)); ?>
		
					<?php echo $form->textFieldRow($model,'gpa_score',array('class'=>'span5','maxlength'=>25)); ?>
		
					<?php echo $form->textFieldRow($model,'tgl_masuk',array('class'=>'span5')); ?>
		
					<?php echo $form->textFieldRow($model,'tgl_keluar',array('class'=>'span5')); ?>
		
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

