<?php
$this->breadcrumbs=array(
	'Karyawan Pengalamankerjas',
);

$this->menu=array(
	array('label'=>'Create KaryawanPengalamankerja','url'=>array('create')),
	array('label'=>'Manage KaryawanPengalamankerja','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
