<?php
$this->breadcrumbs=array(
	'Competency Libraries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CompetencyLibrary','url'=>array('index')),
	array('label'=>'Manage CompetencyLibrary','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>