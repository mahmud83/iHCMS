<?php
$this->breadcrumbs=array(
	'Cbr Accountabilities',
);

$this->menu=array(
	array('label'=>'Create CbrAccountability','url'=>array('create')),
	array('label'=>'Manage CbrAccountability','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
