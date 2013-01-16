<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'user_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'jabatan_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'avatar',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'employee_status',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'employee_code',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'firstname',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'lastname',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'nickname',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'birth_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'birth_place',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'blood_id',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'marital_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'sex_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'religion_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'address1',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'address2',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'pos_code',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'identity_number',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'identity_valid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'identity_state',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'identity_pos_code',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'driver_license_number',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'driver_license_valid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'email1',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'email2',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'phone_mobile',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'phone_home',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'phone_office',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textAreaRow($model,'custom',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'create_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'create_by',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'modified_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'modified_by',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
