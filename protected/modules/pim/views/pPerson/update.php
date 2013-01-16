<?php
$this->breadcrumbs=array(
	'Ppeople'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PPerson','url'=>array('index')),
	array('label'=>'Create PPerson','url'=>array('create')),
	array('label'=>'View PPerson','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage PPerson','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>