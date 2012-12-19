<?php
$this->breadcrumbs=array(
	'Wusers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List WUser','url'=>array('index')),
	array('label'=>'Create WUser','url'=>array('create')),
	array('label'=>'Update WUser','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete WUser','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WUser','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail WUser #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'username',
		'password',
		'hash',
		'tgl_buat',
		'tgl_edit',
		'deskripsi',
		'status',
			),
		)); ?>
		</div>
	</div>
</div>
