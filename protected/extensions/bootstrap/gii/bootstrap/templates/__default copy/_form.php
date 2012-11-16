<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<?php echo "<?php \$form=\$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'".$this->class2id($this->modelClass)."-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
		)); ?>\n"; ?>

		<?php
		foreach($this->tableSchema->columns as $column)
		{
			if($column->autoIncrement)
				continue;
		?>
			<?php echo "<?php echo ".$this->generateActiveRow($this->modelClass,$column)."; ?>\n"; ?>
		
		<?php
		}
		?>
		<div class="control-group">
			<div class="controls">
				<?php echo "<?php \$this->widget('bootstrap.widgets.TbButton', array(
					'buttonType'=>'submit',
					'type'=>'primary',
					'label'=>\$model->isNewRecord ? 'Create' : 'Save',
				)); ?>\n"; ?>
				<?php echo "<?php \$this->widget('bootstrap.widgets.TbButton', array(
					'buttonType'=>'reset',
					'label'=>'Reset',
				)); ?>\n"; ?>
			</div>
		</div>
		<?php echo "<?php \$this->endWidget(); ?>\n"; ?>
		</div>
	</div>
</div>

