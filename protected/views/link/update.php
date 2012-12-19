<?php
$this->breadcrumbs=array(
	'Links'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Link','url'=>array('index')),
	array('label'=>'Create Link','url'=>array('create')),
	array('label'=>'View Link','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Link','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>