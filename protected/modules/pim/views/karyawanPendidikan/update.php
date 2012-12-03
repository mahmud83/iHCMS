<?php
$this->breadcrumbs=array(
	'Karyawan Pendidikans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List KaryawanPendidikan','url'=>array('index')),
	array('label'=>'Create KaryawanPendidikan','url'=>array('create')),
	array('label'=>'View KaryawanPendidikan','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage KaryawanPendidikan','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>