<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cbr_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tkh',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'mkh',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'hrs',array('class'=>'span5','maxlength'=>45)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
