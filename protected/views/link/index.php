<?php
$this->breadcrumbs=array(
	'Links',
);

$this->menu=array(
	array('label'=>'Create Link','url'=>array('create')),
	array('label'=>'Manage Link','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
