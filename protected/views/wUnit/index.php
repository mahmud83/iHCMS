<?php
$this->breadcrumbs=array(
	'Wunits',
);

$this->menu=array(
	array('label'=>'Create WUnit','url'=>array('create')),
	array('label'=>'Manage WUnit','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
