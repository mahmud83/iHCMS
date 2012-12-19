<?php
$this->breadcrumbs=array(
	'Wlinks',
);

$this->menu=array(
	array('label'=>'Create WLink','url'=>array('create')),
	array('label'=>'Manage WLink','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
