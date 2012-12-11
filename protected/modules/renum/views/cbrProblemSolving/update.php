<?php
$this->breadcrumbs=array(
	'Cbr Problem Solvings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CbrProblemSolving','url'=>array('index')),
	array('label'=>'Create CbrProblemSolving','url'=>array('create')),
	array('label'=>'View CbrProblemSolving','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CbrProblemSolving','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>