<?php
$this->breadcrumbs=array(
	'Jabatans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Jabatan','url'=>array('index')),
	array('label'=>'Create Jabatan','url'=>array('create')),
	array('label'=>'Update Jabatan','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Jabatan','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jabatan','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail Jabatan #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'kode',
		'nama',
		'level',
		'parent',
			),
		)); ?>
		</div>
	</div>
</div>
