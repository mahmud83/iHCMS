<?php
$this->breadcrumbs=array(
	'Wusers',
);

$this->menu=array(
	array('label'=>'Create WUser','url'=>array('create')),
	array('label'=>'Manage WUser','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
