<?php
$this->breadcrumbs=array(
	'Karyawans',
);
/*
$this->menu=array(
	array('label'=>'Create Karyawan','url'=>array('create')),
	array('label'=>'Manage Karyawan','url'=>array('admin')),
);*/
$this->menu = Yii::app()->allspark->getActions('KaryawanController', 'pim');

?>
<div class="span12 widget">
	<div class="widget-title">
		<i class="icon-group titleicon"></i>
		<p>Daftar Karyawan</p>
	</div>
	<div class="widget-content">
		<ul class="list-user">
		<?php $this->widget('bootstrap.widgets.TbListView',array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</ul>
	</div>
</div>