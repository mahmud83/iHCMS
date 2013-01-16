<?php
$this->breadcrumbs=array(
	'Ppeople',
);

$this->menu=array(
	array('label'=>'Create PPerson','url'=>array('create')),
	array('label'=>'Manage PPerson','url'=>array('admin')),
);
?>
<div class="row-fluid">
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>
