<?php
$this->breadcrumbs=array(
	'Karyawan Imigrasis',
);

$this->menu=array(
	array('label'=>'Create KaryawanImigrasi','url'=>array('create')),
	array('label'=>'Manage KaryawanImigrasi','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
