<?php
$this->breadcrumbs=array(
	'Karyawan Sertifikasis',
);

$this->menu=array(
	array('label'=>'Create KaryawanSertifikasi','url'=>array('create')),
	array('label'=>'Manage KaryawanSertifikasi','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
