<?php
$this->breadcrumbs=array(
	'Wjob Families',
);

$this->menu=array(
	array('label'=>'Create WJobFamily','url'=>array('create')),
	array('label'=>'Manage WJobFamily','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
