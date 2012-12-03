<?php
$this->breadcrumbs=array(
	'Karyawan Tanggungans',
);

$this->menu=array(
	array('label'=>'Create KaryawanTanggungan','url'=>array('create')),
	array('label'=>'Manage KaryawanTanggungan','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
