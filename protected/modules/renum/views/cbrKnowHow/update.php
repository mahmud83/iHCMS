<?php
$this->breadcrumbs=array(
	'Cbr Know Hows'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CbrKnowHow','url'=>array('index')),
	array('label'=>'Create CbrKnowHow','url'=>array('create')),
	array('label'=>'View CbrKnowHow','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CbrKnowHow','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>