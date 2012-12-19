<?php
$this->breadcrumbs=array(
	'Wstates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WState','url'=>array('index')),
	array('label'=>'Manage WState','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>