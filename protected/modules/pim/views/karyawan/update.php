<?php
$this->breadcrumbs=array(
	'Karyawans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Karyawan','url'=>array('index')),
	array('label'=>'Create Karyawan','url'=>array('create')),
	array('label'=>'View Karyawan','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Karyawan','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>