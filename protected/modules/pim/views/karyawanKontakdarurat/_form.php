<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'karyawan-kontakdarurat-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
		)); ?>

					<?php echo $form->textFieldRow($model,'karyawan_id',array('class'=>'span5')); ?>
		
					<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>255)); ?>
		
					<?php echo $form->textFieldRow($model,'relasi',array('class'=>'span5','maxlength'=>255)); ?>
		
					<?php echo $form->textFieldRow($model,'telp_rumah',array('class'=>'span5','maxlength'=>50)); ?>
		
					<?php echo $form->textFieldRow($model,'telp_mobile',array('class'=>'span5','maxlength'=>50)); ?>
		
					<?php echo $form->textFieldRow($model,'telp_kantor',array('class'=>'span5','maxlength'=>50)); ?>
		
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

