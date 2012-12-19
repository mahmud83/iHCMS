<?php
$this->breadcrumbs=array(
	'Wusers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WUser','url'=>array('index')),
	array('label'=>'Manage WUser','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>