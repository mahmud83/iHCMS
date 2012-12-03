<?php
$this->breadcrumbs=array(
	'Karyawan Pendidikans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List KaryawanPendidikan','url'=>array('index')),
	array('label'=>'Create KaryawanPendidikan','url'=>array('create')),
	array('label'=>'Update KaryawanPendidikan','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete KaryawanPendidikan','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KaryawanPendidikan','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail KaryawanPendidikan #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'karyawan_id',
		'jenis',
		'institusi',
		'major',
		'nilai',
		'tgl_masuk',
		'tgl_keluar',
			),
		)); ?>
		</div>
	</div>
</div>
