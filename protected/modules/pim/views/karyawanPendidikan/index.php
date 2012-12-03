<?php
$this->breadcrumbs=array(
	'Karyawan Pendidikans',
);

$this->menu=array(
	array('label'=>'Create KaryawanPendidikan','url'=>array('create')),
	array('label'=>'Manage KaryawanPendidikan','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
