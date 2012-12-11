<?php
$this->breadcrumbs=array(
	'Cbr Know Hows',
);

$this->menu=array(
	array('label'=>'Create CbrKnowHow','url'=>array('create')),
	array('label'=>'Manage CbrKnowHow','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
