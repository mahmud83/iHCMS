<?php
$this->breadcrumbs=array(
	'Karyawan Pengalamankerjas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KaryawanPengalamankerja','url'=>array('index')),
	array('label'=>'Manage KaryawanPengalamankerja','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>