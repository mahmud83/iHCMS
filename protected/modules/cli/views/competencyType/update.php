<?php
$this->breadcrumbs=array(
	'Competency Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompetencyType','url'=>array('index')),
	array('label'=>'Create CompetencyType','url'=>array('create')),
	array('label'=>'View CompetencyType','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CompetencyType','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>