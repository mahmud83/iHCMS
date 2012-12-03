<?php
$this->breadcrumbs=array(
	'Karyawan Pengalamankerjas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List KaryawanPengalamankerja','url'=>array('index')),
	array('label'=>'Create KaryawanPengalamankerja','url'=>array('create')),
	array('label'=>'Update KaryawanPengalamankerja','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete KaryawanPengalamankerja','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KaryawanPengalamankerja','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail KaryawanPengalamankerja #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'karyawan_id',
		'perusahaan',
		'jabatan',
		'tgl_masuk',
		'tgl_keluar',
		'komentar',
			),
		)); ?>
		</div>
	</div>
</div>
