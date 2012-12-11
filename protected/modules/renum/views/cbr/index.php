<?php
$this->breadcrumbs=array(
	'Cbrs',
);

$this->menu=array(
	array('label'=>'Create Cbr','url'=>array('create')),
	array('label'=>'Manage Cbr','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
