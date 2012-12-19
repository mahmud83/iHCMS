<?php
$this->breadcrumbs=array(
	'Wcountries',
);

$this->menu=array(
	array('label'=>'Create WCountry','url'=>array('create')),
	array('label'=>'Manage WCountry','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
