<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'karyawan-imigrasi-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
		)); ?>

					<?php echo $form->dropDownListRow($model, 'karyawan_id', CHtml::listData(Karyawan::model()->findAll(), 'id', 'nama_depan')); ?>	
					<?php $this->widget('application.components.widgets.userlookup.UserLookupWidget'); ?>
		
					<?php echo $form->textFieldRow($model,'nomor_dokumen',array('class'=>'span5','maxlength'=>100)); ?>
		
					<?php echo $form->textFieldRow($model,'tgl_dikeluarkan',array('class'=>'span5')); ?>
		
					<?php echo $form->textFieldRow($model,'tgl_berakhir',array('class'=>'span5')); ?>
		
					<?php echo $form->textFieldRow($model,'status_kelayakan',array('class'=>'span5','maxlength'=>100)); ?>
		
					<?php echo $form->textFieldRow($model,'review_date',array('class'=>'span5')); ?>
		
					<?php echo $form->textFieldRow($model,'negara_id',array('class'=>'span5')); ?>
		
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

