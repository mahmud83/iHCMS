<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'person_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'level',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'institution_name',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'institution_major',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'gpa_score',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->textFieldRow($model,'tgl_masuk',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tgl_keluar',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
