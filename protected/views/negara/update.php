<?php
$this->breadcrumbs=array(
	'Negaras'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Negara','url'=>array('index')),
	array('label'=>'Create Negara','url'=>array('create')),
	array('label'=>'View Negara','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Negara','url'=>array('admin')),
);
?>

<h1>Update Negara <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>