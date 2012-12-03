<?php
$this->breadcrumbs=array(
	'Karyawan Kontakdarurats',
);

$this->menu=array(
	array('label'=>'Create KaryawanKontakdarurat','url'=>array('create')),
	array('label'=>'Manage KaryawanKontakdarurat','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
