<?php
$this->breadcrumbs=array(
	'Competency Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CompetencyType','url'=>array('index')),
	array('label'=>'Manage CompetencyType','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>