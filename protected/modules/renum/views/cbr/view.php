<?php
$this->breadcrumbs=array(
	'Cbrs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cbr','url'=>array('index')),
	array('label'=>'Create Cbr','url'=>array('create')),
	array('label'=>'Update Cbr','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Cbr','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cbr','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail Cbr #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'jabatan_id',
		'date',
		'kh_score',
		'ps_persent',
		'ps_score',
		'ac_score',
			),
		)); ?>
		</div>
	</div>
</div>
