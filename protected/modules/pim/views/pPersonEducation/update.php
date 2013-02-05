<?php
$this->breadcrumbs=array(
	'Pperson Educations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PPersonEducation','url'=>array('index')),
	array('label'=>'Create PPersonEducation','url'=>array('create')),
	array('label'=>'View PPersonEducation','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage PPersonEducation','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>