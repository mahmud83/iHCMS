<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'competency-category-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
		)); ?>
		
			<?php echo $form->dropDownListRow($model, 'competency_type_id', CHtml::listData(CompetencyType::model()->findAll(array('order' => 'name')), 'id', 'name'), array('prompt'=>'Silakan Pilih Salah Satu')); ?>

			<?php echo $form->textFieldRow($model,'code',array('class'=>'span5','maxlength'=>45)); ?>
		
			<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>
		
			<?php //echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
			<?php echo $form->redactorRow($model, 'description', array('class'=>'span4', 'rows'=>6)); ?>
		
			<?php echo $form->redactorRow($model, 'definition', array('class'=>'span4', 'rows'=>8)); ?>
				
			<?php //echo $form->textFieldRow($model,'competency_type_id',array('class'=>'span5')); ?>
					
		
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
