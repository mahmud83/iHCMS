<?php
$this->breadcrumbs=array(
	'Karyawan Imigrasis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List KaryawanImigrasi','url'=>array('index')),
	array('label'=>'Create KaryawanImigrasi','url'=>array('create')),
	array('label'=>'View KaryawanImigrasi','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage KaryawanImigrasi','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>