<?php
$this->breadcrumbs=array(
	'Negaras'=>array('index'),
	$model->kode,
);

$this->menu=array(
	array('label'=>'List Negara','url'=>array('index')),
	array('label'=>'Create Negara','url'=>array('create')),
	array('label'=>'Update Negara','url'=>array('update','id'=>$model->kode)),
	array('label'=>'Delete Negara','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->kode),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Negara','url'=>array('admin')),
);
?>

<h1>View Negara #<?php echo $model->kode; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'kode',
		'nama',
		'iso3',
		'numcode',
	),
)); ?>
