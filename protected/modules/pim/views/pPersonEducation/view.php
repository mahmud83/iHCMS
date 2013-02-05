<?php
$this->breadcrumbs=array(
	'Pperson Educations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PPersonEducation','url'=>array('index')),
	array('label'=>'Create PPersonEducation','url'=>array('create')),
	array('label'=>'Update PPersonEducation','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete PPersonEducation','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PPersonEducation','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail PPersonEducation #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'person_id',
		'level',
		'institution_name',
		'institution_major',
		'gpa_score',
		'tgl_masuk',
		'tgl_keluar',
			),
		)); ?>
		</div>
	</div>
</div>
