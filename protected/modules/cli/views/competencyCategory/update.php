<?php
$this->breadcrumbs=array(
	'Competency Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompetencyCategory','url'=>array('index')),
	array('label'=>'Create CompetencyCategory','url'=>array('create')),
	array('label'=>'View CompetencyCategory','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CompetencyCategory','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>