<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<?php 
		$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'wlink-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
			'htmlOptions'=>array('enctype'=>'multipart/form-data'),
		)); 

		//echo $form->textFieldRow($model,'parent_id',array('class'=>'span5')); 
		echo $form->dropDownListRow($model, 'parent_id',  array(null=>'top parent', 'link'=>CHtml::listData(WLink::model()->findAll(), 'id', 'name')));
		
		echo $form->dropDownListRow($model, 'w_module_id',  CHtml::listData(WModule::model()->findAll(), 'id', 'name'));
		
		echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>45));
		
		echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>100)); 
		
		echo $form->textFieldRow($model,'url',array('class'=>'span5','maxlength'=>200)); 
		
		echo $form->fileFieldRow($model,'image',array('class'=>'span5','maxlength'=>200)); 
		
		echo $form->textAreaRow($model,'auth',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); 
		
		?>
		
		<div class="control-group">
			<div class="controls">
				<?php 
				$this->widget('bootstrap.widgets.TbButton', array(
					'buttonType'=>'submit',
					'type'=>'primary',
					'label'=>$model->isNewRecord ? 'Create' : 'Save',
				)); 
				$this->widget('bootstrap.widgets.TbButton', array(
					'buttonType'=>'reset',
					'label'=>'Reset',
				)); 
				?>
			</div>
		</div>
		<?php $this->endWidget(); ?>
	</div>
</div>

