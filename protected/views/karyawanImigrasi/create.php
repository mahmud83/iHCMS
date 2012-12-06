<?php
$this->breadcrumbs=array(
	'Karyawan Imigrasis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KaryawanImigrasi','url'=>array('index')),
	array('label'=>'Manage KaryawanImigrasi','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>