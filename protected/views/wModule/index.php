<?php
$this->breadcrumbs=array(
	'Wmodules',
);

$this->menu=array(
	array('label'=>'Create WModule','url'=>array('create')),
	array('label'=>'Manage WModule','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
