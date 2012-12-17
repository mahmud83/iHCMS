<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Site Preference</p>
		</div>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'preference-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
		)); ?>
			<div class="control-group">
				<label class="control-label"> Site Logo </label>
				<div class="controls">  
					<input name="preferenceForm[siteLogo]" id="PreferenceForm_siteLogo" type="file">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label"> Site Name </label>
				<div class="controls">  
					<input name="preferenceForm[siteName]" id="PreferenceForm_siteName" type="text">
				</div>
			</div>

					
		
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