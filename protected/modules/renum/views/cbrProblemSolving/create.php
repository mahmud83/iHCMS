<?php
$this->breadcrumbs=array(
	'Cbr Problem Solvings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CbrProblemSolving','url'=>array('index')),
	array('label'=>'Manage CbrProblemSolving','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>