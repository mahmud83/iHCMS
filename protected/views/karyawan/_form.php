<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'karyawan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nip',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'nama_depan',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'nama_tengah',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'nama_belakang',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'nama_panggilan',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'tgl_lahir',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'warga_negara',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'kelamin',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'no_ktp',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'no_ktp_exp_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'no_sim',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'no_sim_exp_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'status_kawin',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'status_karyawan',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'alamat1',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'alamat2',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'kota',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'negara',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'propinsi',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'kodepos',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'tlp_rumah',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'tlp_mobile',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'tlp_kantor',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'email1',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'email2',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textAreaRow($model,'custom',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
