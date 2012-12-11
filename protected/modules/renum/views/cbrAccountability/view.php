<?php
$this->breadcrumbs=array(
	'Cbr Accountabilities'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CbrAccountability','url'=>array('index')),
	array('label'=>'Create CbrAccountability','url'=>array('create')),
	array('label'=>'Update CbrAccountability','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete CbrAccountability','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CbrAccountability','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail CbrAccountability #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'cbr_id',
		'fta',
		'aid',
		'amt',
		'toi',
		'prf',
			),
		)); ?>
		</div>
	</div>
</div>
