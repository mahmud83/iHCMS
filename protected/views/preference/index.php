<?php
$this->breadcrumbs=array(
	'Preferences',
);

$this->menu=array(
	array('label'=>'Create Preference','url'=>array('create')),
	array('label'=>'Manage Preference','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
