<?php
$this->breadcrumbs=array(
	'Pperson Occupation Historicals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PPersonOccupationHistorical','url'=>array('index')),
	array('label'=>'Manage PPersonOccupationHistorical','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>