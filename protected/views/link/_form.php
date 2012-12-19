<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'link-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
			'htmlOptions'=>array('enctype'=>'multipart/form-data'),
		)); ?>
		
			<?php //echo $form->textFieldRow($model,'parent_id',array('class'=>'span5')); ?>
			<?php echo $form->dropDownListRow($model, 'parent_id',  array('0'=>'top parent', 'link'=>CHtml::listData(Link::model()->findAll(), 'id', 'name'))); ?>
			
			<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>45)); ?>
		
			<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>100)); ?>
		
			<?php echo $form->textFieldRow($model,'url',array('class'=>'span5','maxlength'=>200)); ?>
		
			<?php echo $form->textFieldRow($model,'image',array('class'=>'span5','maxlength'=>200)); ?>
		
			<?php echo $form->textAreaRow($model,'auth',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
		
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

