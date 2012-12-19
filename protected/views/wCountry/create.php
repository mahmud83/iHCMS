<?php
$this->breadcrumbs=array(
	'Wcountries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WCountry','url'=>array('index')),
	array('label'=>'Manage WCountry','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>