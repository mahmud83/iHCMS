<?php
$this->breadcrumbs=array(
	'Woccupations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WOccupation','url'=>array('index')),
	array('label'=>'Manage WOccupation','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>