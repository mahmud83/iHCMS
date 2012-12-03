<?php
$this->breadcrumbs=array(
	'Karyawan Tanggungans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List KaryawanTanggungan','url'=>array('index')),
	array('label'=>'Create KaryawanTanggungan','url'=>array('create')),
	array('label'=>'Update KaryawanTanggungan','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete KaryawanTanggungan','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KaryawanTanggungan','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail KaryawanTanggungan #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'karyawan_id',
		'nama',
		'relasi',
		'tgl_lahir',
			),
		)); ?>
		</div>
	</div>
</div>
