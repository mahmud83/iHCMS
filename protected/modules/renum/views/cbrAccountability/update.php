<?php
$this->breadcrumbs=array(
	'Cbr Accountabilities'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CbrAccountability','url'=>array('index')),
	array('label'=>'Create CbrAccountability','url'=>array('create')),
	array('label'=>'View CbrAccountability','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CbrAccountability','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>