<?php
$this->breadcrumbs=array(
	'Cbrs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cbr','url'=>array('index')),
	array('label'=>'Create Cbr','url'=>array('create')),
	array('label'=>'View Cbr','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Cbr','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>