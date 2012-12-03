<?php
$this->breadcrumbs=array(
	'Karyawan Kontakdarurats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List KaryawanKontakdarurat','url'=>array('index')),
	array('label'=>'Create KaryawanKontakdarurat','url'=>array('create')),
	array('label'=>'Update KaryawanKontakdarurat','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete KaryawanKontakdarurat','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KaryawanKontakdarurat','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail KaryawanKontakdarurat #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'karyawan_id',
		'nama',
		'relasi',
		'telp_rumah',
		'telp_mobile',
		'telp_kantor',
			),
		)); ?>
		</div>
	</div>
</div>
