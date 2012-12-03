<?php
$this->breadcrumbs=array(
	'Karyawan Tanggungans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KaryawanTanggungan','url'=>array('index')),
	array('label'=>'Manage KaryawanTanggungan','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>