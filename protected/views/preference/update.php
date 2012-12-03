<?php
$this->breadcrumbs=array(
	'Preferences'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Preference','url'=>array('index')),
	array('label'=>'Create Preference','url'=>array('create')),
	array('label'=>'View Preference','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Preference','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>