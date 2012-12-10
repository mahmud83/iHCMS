<?php
$this->breadcrumbs=array(
	'Karyawans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Daftar Karyawan','url'=>array('index')),
	array('label'=>'Detail Karyawan','url'=>array('empdetail', 'id'=>$model->id)),
	array('label'=>'Detail User','url'=>array('/user/update', 'id'=>$model->user_id)),
	array('label'=>'Delete Karyawan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id), 'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Form</p>
		</div>
		<?php 
			$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
				'id'=>'karyawan-form',
				'type'=>'horizontal',
				'enableAjaxValidation'=>true,
			)); 

			echo $form->textFieldRow($model,'nip',array('class'=>'span5','maxlength'=>45));	
			
			echo $form->textFieldRow($model,'nama_depan',array('class'=>'span5','maxlength'=>45));
			
			echo $form->textFieldRow($model,'nama_tengah',array('class'=>'span5','maxlength'=>45)); 
			
			echo $form->textFieldRow($model,'nama_belakang',array('class'=>'span5','maxlength'=>45));
			
			echo $form->textFieldRow($model,'nama_panggilan',array('class'=>'span5','maxlength'=>45)); 
			
			echo $form->datepickerRow($model, 'tgl_lahir',array('append'=>'<i class="icon-calendar"></i>', 'options'=>array('format'=>'yyyy-mm-dd')));
			
			echo $form->dropDownListRow($model, 'warga_negara',
        CHtml::listData(Negara::model()->findAll(), 'id', 'nama')); 
        
        	echo $form->textFieldRow($model,'kelamin',array('class'=>'span5','maxlength'=>45));
        	
        	echo $form->textFieldRow($model,'no_ktp',array('class'=>'span5','maxlength'=>255));
        	
        	echo $form->datepickerRow($model, 'no_ktp_exp_date',array('append'=>'<i class="icon-calendar"></i>', 'options'=>array('format'=>'yyyy-mm-dd')));
        	
        	echo $form->textFieldRow($model,'no_sim',array('class'=>'span5','maxlength'=>255));
        	
        	echo $form->datepickerRow($model, 'no_sim_exp_date', array('append'=>'<i class="icon-calendar"></i>', 'options'=>array('format'=>'yyyy-mm-dd')));
        
        	echo $form->textFieldRow($model,'status_kawin',array('class'=>'span5','maxlength'=>45));
        	
        	echo $form->textFieldRow($model,'status_karyawan',array('class'=>'span5'));
        	
        	echo $form->textFieldRow($model,'alamat1',array('class'=>'span5','maxlength'=>255));
        	
        	echo $form->textFieldRow($model,'alamat2',array('class'=>'span5','maxlength'=>255));
        	
        	echo $form->textFieldRow($model,'kota',array('class'=>'span5','maxlength'=>100));
        	
        	echo $form->dropDownListRow($model, 'negara', CHtml::listData(Negara::model()->findAll(), 'id', 'nama'));
        	
        	echo $form->dropDownListRow($model, 'propinsi', CHtml::listData(Propinsi::model()->findAll(), 'id', 'nama'));
        
        	echo $form->textFieldRow($model,'kodepos',array('class'=>'span5','maxlength'=>100));
        	
        	echo $form->textFieldRow($model,'tlp_rumah',array('class'=>'span5','maxlength'=>50));
        	
        	echo $form->textFieldRow($model,'tlp_mobile',array('class'=>'span5','maxlength'=>50));
        	
        	echo $form->textFieldRow($model,'tlp_kantor',array('class'=>'span5','maxlength'=>50));
        	
        	echo $form->textFieldRow($model,'email1',array('class'=>'span5','maxlength'=>50));
        	
        	echo $form->textFieldRow($model,'email2',array('class'=>'span5','maxlength'=>50));
        	
        	echo $form->textAreaRow($model,'custom',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); 
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
				)); ?>
			</div>
		</div>
		<?php $this->endWidget(); ?>
	</div>
</div>

