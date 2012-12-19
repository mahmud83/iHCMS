<?php
$this->breadcrumbs=array(
	'Wmodules'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WModule','url'=>array('index')),
	array('label'=>'Manage WModule','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>