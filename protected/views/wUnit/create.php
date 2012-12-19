<?php
$this->breadcrumbs=array(
	'Wunits'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WUnit','url'=>array('index')),
	array('label'=>'Manage WUnit','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>