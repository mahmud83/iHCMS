<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'karyawan_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'jenis',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'institusi',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'major',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'nilai',array('class'=>'span5','maxlength'=>25)); ?>

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
