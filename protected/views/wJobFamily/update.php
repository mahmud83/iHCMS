<?php
$this->breadcrumbs=array(
	'Wjob Families'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WJobFamily','url'=>array('index')),
	array('label'=>'Create WJobFamily','url'=>array('create')),
	array('label'=>'View WJobFamily','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage WJobFamily','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>