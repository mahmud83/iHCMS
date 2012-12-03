<?php
$this->breadcrumbs=array(
	'Karyawan Sertifikasis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KaryawanSertifikasi','url'=>array('index')),
	array('label'=>'Manage KaryawanSertifikasi','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>