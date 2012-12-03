<div class="form">

<?php //$form=$this->beginWidget('CActiveForm'); ?>
<?php /** @var BootActiveForm $form */
	$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'horizontalForm',
		'type'=>'horizontal',
	)); ?>	
	<div>
		<?php echo $form->dropDownList($model, 'itemname', $itemnameSelectOptions); ?>
		<?php echo $form->error($model, 'itemname'); ?>
	</div>
	
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>Rights::t('core', 'Assign'))); ?>
		<?php //echo CHtml::submitButton(Rights::t('core', 'Assign')); ?>
	</div>

<?php $this->endWidget(); ?>

</div>