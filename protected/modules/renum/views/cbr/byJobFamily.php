<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-external-link titleicon"></i>
			<p>Job Family</p>
		</div>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'cbr-form',
			'type'=>'horizontal',
			'enableAjaxValidation'=>true,
		)); ?>
		
		<?php echo $form->dropDownListRow($model_jabatan, 'job_family', CHtml::listData(WJobFamily::model()->findAll(), 'id', 'name'), array('prompt'=>'Please Select', 'onchange'=>'this.form.submit()')); ?>
		
		<?php $this->endWidget(); ?>
	</div>
</div>
<?php
if (isset($model)){
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Manajemen Cbr</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
				'id'=>'cbr-grid',
				'dataProvider'=>$model,
				'columns'=>array(
					array(
						'header' => 'Jabatan',
						'name' => 'jabatan_id',
                        'value'=>'$data->jabatan->name." (".$data->jabatan->wUnit->name.") "',
                        'sortable' => true,
					),
					'kh_score',
					'ps_persent',
					'ps_score',
					'ac_score',
					'total',
				),
			)); ?>
		</div>
	</div>
</div>
<?php
}
?>