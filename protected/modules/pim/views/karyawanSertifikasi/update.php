<?php
$this->breadcrumbs=array(
	'Karyawan Sertifikasis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List KaryawanSertifikasi','url'=>array('index')),
	array('label'=>'Create KaryawanSertifikasi','url'=>array('create')),
	array('label'=>'View KaryawanSertifikasi','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage KaryawanSertifikasi','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>