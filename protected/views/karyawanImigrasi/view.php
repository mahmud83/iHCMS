<?php
$this->breadcrumbs=array(
	'Karyawan Imigrasis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List KaryawanImigrasi','url'=>array('index')),
	array('label'=>'Create KaryawanImigrasi','url'=>array('create')),
	array('label'=>'Update KaryawanImigrasi','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete KaryawanImigrasi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KaryawanImigrasi','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail KaryawanImigrasi #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'karyawan_id',
		'nomor_dokumen',
		'tgl_dikeluarkan',
		'tgl_berakhir',
		'status_kelayakan',
		'review_date',
		'negara_id',
			),
		)); ?>
		</div>
	</div>
</div>
