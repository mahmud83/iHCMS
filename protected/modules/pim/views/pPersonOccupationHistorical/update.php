<?php
$this->breadcrumbs=array(
	'Pperson Occupation Historicals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PPersonOccupationHistorical','url'=>array('index')),
	array('label'=>'Create PPersonOccupationHistorical','url'=>array('create')),
	array('label'=>'View PPersonOccupationHistorical','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage PPersonOccupationHistorical','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>