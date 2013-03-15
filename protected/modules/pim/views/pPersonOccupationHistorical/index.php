<?php
$this->breadcrumbs=array(
	'Pperson Occupation Historicals',
);

$this->menu=array(
	array('label'=>'Create PPersonOccupationHistorical','url'=>array('create')),
	array('label'=>'Manage PPersonOccupationHistorical','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
