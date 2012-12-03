<?php
$this->breadcrumbs=array(
	'Karyawan Pendidikans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KaryawanPendidikan','url'=>array('index')),
	array('label'=>'Manage KaryawanPendidikan','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>