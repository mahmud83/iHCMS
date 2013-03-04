<?php
$this->breadcrumbs=array(
	'Competency Libraries'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompetencyLibrary','url'=>array('index')),
	array('label'=>'Create CompetencyLibrary','url'=>array('create')),
	array('label'=>'View CompetencyLibrary','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CompetencyLibrary','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>