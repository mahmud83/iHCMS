<?php
$this->breadcrumbs=array(
	'Cbr Problem Solvings',
);

$this->menu=array(
	array('label'=>'Create CbrProblemSolving','url'=>array('create')),
	array('label'=>'Manage CbrProblemSolving','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
