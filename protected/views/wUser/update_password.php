<?php
$this->breadcrumbs=array(
	'Wusers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WUser','url'=>array('index')),
	array('label'=>'Create WUser','url'=>array('create')),
	array('label'=>'View WUser','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage WUser','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_formChangePassword',array('model'=>$model)); ?>