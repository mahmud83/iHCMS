<?php
$this->breadcrumbs=array(
	'Wlinks'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WLink','url'=>array('index')),
	array('label'=>'Create WLink','url'=>array('create')),
	array('label'=>'View WLink','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage WLink','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>