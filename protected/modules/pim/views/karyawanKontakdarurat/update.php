<?php
$this->breadcrumbs=array(
	'Karyawan Kontakdarurats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List KaryawanKontakdarurat','url'=>array('index')),
	array('label'=>'Create KaryawanKontakdarurat','url'=>array('create')),
	array('label'=>'View KaryawanKontakdarurat','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage KaryawanKontakdarurat','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>