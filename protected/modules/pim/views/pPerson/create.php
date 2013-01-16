<?php
$this->breadcrumbs=array(
	'Ppeople'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PPerson','url'=>array('index')),
	array('label'=>'Manage PPerson','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>