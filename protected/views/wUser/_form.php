<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'wuser-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
		)); ?>
		
			<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>45)); ?>
		
			<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>45)); ?>
			
			<?php echo $form->passwordFieldRow($model,'password2',array('class'=>'span5','maxlength'=>45)); ?>
		
			<?php //echo $form->textFieldRow($model,'hash',array('class'=>'span5','maxlength'=>45)); ?>
		
			<?php //echo $form->textFieldRow($model,'created_date',array('class'=>'span5')); ?>
		
			<?php //echo $form->textFieldRow($model,'created_by',array('class'=>'span5')); ?>
		
			<?php //echo $form->textFieldRow($model,'modified_date',array('class'=>'span5')); ?>
		
			<?php //echo $form->textFieldRow($model,'modified_by',array('class'=>'span5')); ?>
		
			<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
		
			<?php //echo $form->textFieldRow($model,'status_id',array('class'=>'span5')); ?>
			
			<?php echo $form->dropDownListRow($model, 'status_id',
        array('0'=> 'non aktif', '1' => 'aktif')); ?>
		
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

