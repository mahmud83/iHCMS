<?php
$this->breadcrumbs=array(
	'Competency Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CompetencyCategory','url'=>array('index')),
	array('label'=>'Manage CompetencyCategory','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>