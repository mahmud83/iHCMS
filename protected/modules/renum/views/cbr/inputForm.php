<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'cbr-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
		)); ?>

					<?php //echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>
		
					<?php echo $form->textFieldRow($model,'jabatan_id',array('class'=>'span5')); ?>
		
					<?php //echo $form->textFieldRow($model,'date',array('class'=>'span5')); ?>
                    
                    <?php echo $form->datepickerRow($model, 'date',
        array('append'=>'<i class="icon-calendar"></i>', 'options'=>array('format'=>'yyyy-mm-dd'))); ?>
        
        <fieldset>
            
            <legend>Know How</legend>
            
            <?php //echo $form->textFieldRow($modelKh,'tkh',array('class'=>'span5')); ?>
            <?php echo $form->dropDownListRow($modelKh, 'tkh',
array(''=>'please select', 'Primary'=>array('A-','A', 'A+'), 'Elementary Vocational'=>array('B-', 'B', 'B+'), 'Vocational'=>array('C-', 'C', 'C+'), 'Advance Vocational'=>array('D-', 'D', 'D+'), 'Basic Professional'=>array('E-', 'E', 'E+'), 'Seasoned Professional'=>array('F-', 'F', 'F+'), 'Professional Mastery'=>array('G-','G', 'G+'))); ?>
            
            <?php //echo $form->textFieldRow($modelKh,'mkh',array('class'=>'span5')); ?>
            <?php echo $form->dropDownListRow($modelKh, 'mkh', array(''=>'please select', 'N'=>'Task', 'I'=>'Supervisory', 'II'=>'Managerial', 'III'=>'Diverse Managerial', 'IV'=>'Total')) ;?>
            
            <?php //echo $form->textFieldRow($modelKh,'hrs',array('class'=>'span5')); ?>
            <?php echo $form->dropDownListRow($modelKh, 'hrs', array(''=>'please select', '1'=>'Basic', '2'=>'Important', '3'=>'Critical')) ;?>
            
            <?php echo $form->textFieldRow($model,'kh_score',array('class'=>'span5')); ?>
            
        </fieldset>
        
        <fieldset>
        
            <legend>Problem Solving</legend>
            
            <?php //echo $form->textFieldRow($modelPs,'tet',array('class'=>'span5')); ?>
            <?php echo $form->dropDownListRow($modelPs, 'tet', array(''=>'please select', 'Strict Routine'=>array('A', 'A+'), 'Routine'=>array('B', 'B+'), 'Semi Routine'=>array('C', 'C+'), 'Standarised'=>array('D', 'D+'), 'Clearly Defined'=>array('E', 'E+'), 'Broadly Defined'=>array('F', 'F+'), 'Generally Defined'=>array('G', 'G+'), 'Abstractly Defined'=>array('H', 'H+'),)) ;?>
            
            <?php //echo $form->textFieldRow($modelPs,'tce',array('class'=>'span5')); ?>
            <?php echo $form->dropDownListRow($modelPs, 'tce', array(''=>'please select', '1'=>'Repetitive', '2'=>'Patterned', '3'=>'Variable', '4'=>'Adaptive', '5'=>'Unearthed')) ;?>
        
			<?php echo $form->textFieldRow($model,'ps_persent',array('class'=>'span5')); ?>

			<?php echo $form->textFieldRow($model,'ps_score',array('class'=>'span5')); ?>
                
        </fieldset>  
        
        <fieldset>
        
            <legend>Accountability</legend>
            
            <?php //echo $form->textFieldRow($modelAc,'fta',array('class'=>'span5')); ?>
            <?php echo $form->dropDownListRow($modelAc, 'fta', array(''=>'please select', 'A'=>'Prescribed', 'B'=>'Controlled', 'C'=>'Standardised', 'D'=>'Regulated', 'E'=>'Directed', 'F'=>'Generally Directed', 'G'=>'Guided')) ;?>
            
            <?php //echo $form->textFieldRow($modelAc,'aid',array('class'=>'span5')); ?>
            <?php echo $form->dropDownListRow($modelAc, 'aid', array(''=>'please select', 'Nominal', 'Moderate', 'Major', 'Critical',)) ;?>
            
            <?php //echo $form->textFieldRow($modelAc,'amt',array('class'=>'span5')); ?>
            <?php echo $form->dropDownListRow($modelAc, 'amt', array(''=>'please select', '1'=>'Very Small', '2'=>'Small', '3'=>'Medium', '4'=>'Large', '5'=>'Very Large')) ;?>
            
            <?php //echo $form->textFieldRow($modelAc,'toi',array('class'=>'span5')); ?>
            <?php echo $form->dropDownListRow($modelAc, 'toi', array(''=>'please select', 'Remote', 'Contributory', 'Shared', 'Prime')) ;?>
            
            <?php //echo $form->textFieldRow($modelAc,'prf',array('class'=>'span5')); ?>
            <?php echo $form->dropDownListRow($modelAc, 'prf', array(''=>'please select', 'Problem Solving', 'Accountability')) ;?>
            
            <?php echo $form->textFieldRow($model,'ac_score',array('class'=>'span5')); ?>
        
        </fieldset>      														
		
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

