<?php
$this->breadcrumbs=array(
	'Cbrs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cbr','url'=>array('index')),
	array('label'=>'Manage Cbr','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>