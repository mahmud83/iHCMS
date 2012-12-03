<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'karyawan_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nomor_dokumen',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'tgl_dikeluarkan',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tgl_berakhir',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'status_kelayakan',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'review_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'negara_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
