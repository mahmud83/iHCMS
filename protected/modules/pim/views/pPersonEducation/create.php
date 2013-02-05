<?php
$this->breadcrumbs=array(
	'Pperson Educations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PPersonEducation','url'=>array('index')),
	array('label'=>'Manage PPersonEducation','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>