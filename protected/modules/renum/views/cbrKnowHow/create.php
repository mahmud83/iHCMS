<?php
$this->breadcrumbs=array(
	'Cbr Know Hows'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CbrKnowHow','url'=>array('index')),
	array('label'=>'Manage CbrKnowHow','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>