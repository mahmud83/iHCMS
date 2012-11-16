<?php
$this->breadcrumbs=array(
	'Karyawans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Karyawan','url'=>array('index')),
	array('label'=>'Manage Karyawan','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>