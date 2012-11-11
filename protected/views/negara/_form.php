<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'negara-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'kode',array('class'=>'span5','maxlength'=>2)); ?>

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'iso3',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'numcode',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
