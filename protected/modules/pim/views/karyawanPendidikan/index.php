<?php
$this->menu=array(
	array('label'=>'Create KaryawanPendidikan','url'=>array('create')),
	array('label'=>'Manage KaryawanPendidikan','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Daftar Pendidikan Karyawan</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
			'id'=>'karyawan-pendidikan-grid',
			'dataProvider'=>$dataProvider->search(),
			'filter'=>$model,
			'columns'=>array(
					'jenis',
					'institusi',
					'major',
					'nilai',
					/*
					'tgl_masuk',
					'tgl_keluar',
					*/
				),
			)); ?>
		</div>
	</div>
</div>
