<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<div class="widget-content">
			<?php /** @var BootActiveForm $form */
				$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
					'id'=>'propinsi-form',
					'type'=>'horizontal',
					'enableAjaxValidation'=>true,
				)); ?>
				<?php echo $form->textFieldRow($model, 'nama', array('hint'=>'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
				<?php echo $form->textFieldRow($model, 'kode', array('hint'=>'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
				<?php echo $form->dropDownListRow($model, 'negara_id',
        CHtml::listData(Negara::model()->findAll(), 'id', 'nama'), array('hint'=>'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
				<div class="control-group">
					<div class="controls">
						<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>$model->isNewRecord ? 'Create' : 'Save',)); ?>
						<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
					</div>
				</div>
			<?php $this->endWidget(); ?>
		</div>
	</div>
</div>
