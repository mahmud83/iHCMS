<?php
$this->breadcrumbs=array(
	'Wjob Families'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WJobFamily','url'=>array('index')),
	array('label'=>'Manage WJobFamily','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>