<?php
$this->breadcrumbs=array(
	'Woccupations',
);

$this->menu=array(
	array('label'=>'Create WOccupation','url'=>array('create')),
	array('label'=>'Manage WOccupation','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
