<?php
$this->breadcrumbs=array(
	'Wmodules'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WModule','url'=>array('index')),
	array('label'=>'Create WModule','url'=>array('create')),
	array('label'=>'View WModule','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage WModule','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>