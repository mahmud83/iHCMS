<?php
$this->breadcrumbs=array(
	'Woccupations'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WOccupation','url'=>array('index')),
	array('label'=>'Create WOccupation','url'=>array('create')),
	array('label'=>'View WOccupation','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage WOccupation','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>