<?php
$this->breadcrumbs=array(
	'Karyawan Sertifikasis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List KaryawanSertifikasi','url'=>array('index')),
	array('label'=>'Create KaryawanSertifikasi','url'=>array('create')),
	array('label'=>'Update KaryawanSertifikasi','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete KaryawanSertifikasi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KaryawanSertifikasi','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail KaryawanSertifikasi #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'karyawan_id',
		'jenis',
		'nomor',
		'tgl_dikeluarkan',
		'tgl_berakhir',
			),
		)); ?>
		</div>
	</div>
</div>
