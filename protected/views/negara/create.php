<?php
$this->breadcrumbs=array(
	'Negaras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Negara','url'=>array('index')),
	array('label'=>'Manage Negara','url'=>array('admin')),
);
?>

<h1>Create Negara</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>