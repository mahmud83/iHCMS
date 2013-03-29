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
		
			<div class="control-group">
				<label class="control-label" for="PPerson_user_id">Kategori</label>
					<div class="controls">
						<?php $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
							'name' => 'category',
							'value' => '',
							'sourceUrl' => $this->createUrl('CompetencyCategory/lookup'),
							'options' => array(
								'showAnim' => 'fold',
								'minLength'=>'2',
								'select'=>'js:function( event, ui ) {
									$("#CompetencyLibrary_category").val(ui.item.id);
									$("#category").val(ui.item.value);
									return false;
								}',
							),
							'htmlOptions' => array(
								'style' => 'height:20px; z-index: 4;'
							),
						)); ?>
					<input type="hidden" readonly="readonly" size="2" maxlength="2" name="CompetencyLibrary[category]" id="CompetencyLibrary_category">
				</div>
			</div>
			
			<?php //echo $form->textFieldRow($model,'category',array('class'=>'span5')); ?>
			
			<?php echo $form->textFieldRow($model,'code',array('class'=>'span5','maxlength'=>45)); ?>
			
			<?php echo $form->textFieldRow($model,'dimension',array('class'=>'span5','maxlength'=>45)); ?>
			
			<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>100)); ?>
			
			<?php echo $form->textAreaRow($model,'definition',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
			
			<?php //echo $form->textFieldRow($model,'level_1',array('class'=>'span5','maxlength'=>255)); ?>
			
			<?php echo $form->redactorRow($model, 'level_1', array('class'=>'span4', 'rows'=>5)); ?>
			
			<?php //echo $form->textFieldRow($model,'level_2',array('class'=>'span5','maxlength'=>255)); ?>
			
			<?php echo $form->redactorRow($model, 'level_2', array('class'=>'span4', 'rows'=>5)); ?>
			
			<?php //echo $form->textFieldRow($model,'level_3',array('class'=>'span5','maxlength'=>255)); ?>
			
			<?php echo $form->redactorRow($model, 'level_3', array('class'=>'span4', 'rows'=>5)); ?>
			
			<?php //echo $form->textFieldRow($model,'level_4',array('class'=>'span5','maxlength'=>255)); ?>
			
			<?php echo $form->redactorRow($model, 'level_4', array('class'=>'span4', 'rows'=>5)); ?>
			
			<?php //echo $form->textFieldRow($model,'level_5',array('class'=>'span5','maxlength'=>255)); ?>
			
			<?php echo $form->redactorRow($model, 'level_5', array('class'=>'span4', 'rows'=>5)); ?>
			
			<?php //echo $form->textFieldRow($model,'date',array('class'=>'span5')); ?>
			
			<?php //echo $form->textFieldRow($model,'active',array('class'=>'span5','maxlength'=>1)); ?>
			
			<?php echo $form->toggleButtonRow($model, 'active'); ?>
			
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

