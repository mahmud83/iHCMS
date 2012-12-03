<?php
$this->breadcrumbs=array(
	'Propinsis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Propinsi','url'=>array('index')),
	array('label'=>'Create Propinsi','url'=>array('create')),
	array('label'=>'Update Propinsi','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Propinsi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Propinsi','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail Negara</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
				'nama',
				'kode',
				array('label'=>'Negara', 'value'=>$model->negara->nama),
			),
		)); ?>
		</div>
	</div>
</div>
