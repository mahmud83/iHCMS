<?php
$this->breadcrumbs=array(
	'Wpreferences'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WPreference','url'=>array('index')),
	array('label'=>'Create WPreference','url'=>array('create')),
	array('label'=>'View WPreference','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage WPreference','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>