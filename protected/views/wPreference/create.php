<?php
$this->breadcrumbs=array(
	'Wpreferences'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WPreference','url'=>array('index')),
	array('label'=>'Manage WPreference','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>