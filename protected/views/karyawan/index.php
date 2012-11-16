<?php
$this->breadcrumbs=array(
	'Karyawans',
);

$this->menu=array(
	array('label'=>'Create Karyawan','url'=>array('create')),
	array('label'=>'Manage Karyawan','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
