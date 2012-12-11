<?php
$this->breadcrumbs=array(
	'Cbr Accountabilities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CbrAccountability','url'=>array('index')),
	array('label'=>'Manage CbrAccountability','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>