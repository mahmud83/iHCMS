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
			'htmlOptions'=>array('enctype'=>'multipart/form-data'),
		)); ?>
		
			<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>45)); ?>
			<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>45)); ?>
			<?php echo $form->passwordFieldRow($model,'password2',array('class'=>'span5','maxlength'=>45)); ?>
			
			<?php echo $form->textFieldRow($model,'employee_code',array('class'=>'span5','maxlength'=>45)); ?>
			
			<?php echo $form->textFieldRow($model,'firstname',array('class'=>'span5','maxlength'=>45)); ?>
			
			<?php echo $form->textFieldRow($model,'lastname',array('class'=>'span5','maxlength'=>45)); ?>
			
			<?php echo $form->fileFieldRow($model,'avatar',array('class'=>'span5','maxlength'=>200)); ?>
		
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

