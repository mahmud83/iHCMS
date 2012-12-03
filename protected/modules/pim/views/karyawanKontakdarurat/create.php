<?php
$this->breadcrumbs=array(
	'Karyawan Kontakdarurats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KaryawanKontakdarurat','url'=>array('index')),
	array('label'=>'Manage KaryawanKontakdarurat','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>