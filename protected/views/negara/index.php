<?php
$this->breadcrumbs=array(
	'Negaras',
);

$this->menu=array(
	array('label'=>'Create Negara','url'=>array('create')),
	array('label'=>'Manage Negara','url'=>array('admin')),
);
?>

<h1>Negaras</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
