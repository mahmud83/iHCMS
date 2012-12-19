<?php
$this->breadcrumbs=array(
	'Wunits'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WUnit','url'=>array('index')),
	array('label'=>'Create WUnit','url'=>array('create')),
	array('label'=>'View WUnit','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage WUnit','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>