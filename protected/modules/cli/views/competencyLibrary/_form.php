<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'competency-library-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
		)); ?>

					<?php echo $form->textFieldRow($model,'code',array('class'=>'span5','maxlength'=>45)); ?>
		
					<?php echo $form->textFieldRow($model,'dimension',array('class'=>'span5','maxlength'=>45)); ?>
		
					<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>100)); ?>
		
					<?php echo $form->textFieldRow($model,'description',array('class'=>'span5','maxlength'=>100)); ?>
		
					<?php echo $form->textAreaRow($model,'definition',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
		
					<?php echo $form->textFieldRow($model,'level_1',array('class'=>'span5','maxlength'=>255)); ?>
		
					<?php echo $form->textFieldRow($model,'level_2',array('class'=>'span5','maxlength'=>255)); ?>
		
					<?php echo $form->textFieldRow($model,'level_3',array('class'=>'span5','maxlength'=>255)); ?>
		
					<?php echo $form->textFieldRow($model,'level_4',array('class'=>'span5','maxlength'=>255)); ?>
		
					<?php echo $form->textFieldRow($model,'level_5',array('class'=>'span5','maxlength'=>255)); ?>
		
					<?php echo $form->textFieldRow($model,'date',array('class'=>'span5')); ?>
		
					<?php echo $form->textFieldRow($model,'active',array('class'=>'span5','maxlength'=>1)); ?>
		
					<?php echo $form->textFieldRow($model,'dictionary_type_id',array('class'=>'span5')); ?>
		
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

