<?php
$this->breadcrumbs=array(
	'Wlinks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WLink','url'=>array('index')),
	array('label'=>'Manage WLink','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>