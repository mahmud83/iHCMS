<?php
$this->breadcrumbs=array(
	'Karyawan Pengalamankerjas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List KaryawanPengalamankerja','url'=>array('index')),
	array('label'=>'Create KaryawanPengalamankerja','url'=>array('create')),
	array('label'=>'View KaryawanPengalamankerja','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage KaryawanPengalamankerja','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>