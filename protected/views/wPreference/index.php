<?php
$this->breadcrumbs=array(
	'Wpreferences',
);

$this->menu=array(
	array('label'=>'Create WPreference','url'=>array('create')),
	array('label'=>'Manage WPreference','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
