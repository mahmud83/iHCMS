<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'jabatan-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
		)); ?>

					<?php echo $form->textFieldRow($model,'kode',array('class'=>'span5','maxlength'=>45)); ?>
		
					<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>200)); ?>
		
					<?php //echo $form->textFieldRow($model,'level',array('class'=>'span5')); ?>
		
					<?php //echo $form->textFieldRow($model,'parent',array('class'=>'span5')); ?>
					<?php echo $form->dropDownListRow($model, 'parent',
        CHtml::listData(Jabatan::model()->findAll(), 'id', 'nama')); ?>
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

