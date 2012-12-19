<?php
$this->breadcrumbs=array(
	'Wstates',
);

$this->menu=array(
	array('label'=>'Create WState','url'=>array('create')),
	array('label'=>'Manage WState','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
