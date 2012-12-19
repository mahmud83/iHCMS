<?php
$this->breadcrumbs=array(
	'Wcountries'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WCountry','url'=>array('index')),
	array('label'=>'Create WCountry','url'=>array('create')),
	array('label'=>'View WCountry','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage WCountry','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>