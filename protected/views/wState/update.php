<?php
$this->breadcrumbs=array(
	'Wstates'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WState','url'=>array('index')),
	array('label'=>'Create WState','url'=>array('create')),
	array('label'=>'View WState','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage WState','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>