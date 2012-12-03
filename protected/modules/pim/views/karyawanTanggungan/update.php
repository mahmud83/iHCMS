<?php
$this->breadcrumbs=array(
	'Karyawan Tanggungans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List KaryawanTanggungan','url'=>array('index')),
	array('label'=>'Create KaryawanTanggungan','url'=>array('create')),
	array('label'=>'View KaryawanTanggungan','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage KaryawanTanggungan','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>