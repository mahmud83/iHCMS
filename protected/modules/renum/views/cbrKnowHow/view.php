<?php
$this->breadcrumbs=array(
	'Cbr Know Hows'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CbrKnowHow','url'=>array('index')),
	array('label'=>'Create CbrKnowHow','url'=>array('create')),
	array('label'=>'Update CbrKnowHow','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete CbrKnowHow','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CbrKnowHow','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail CbrKnowHow #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'cbr_id',
		'tkh',
		'mkh',
		'hrs',
			),
		)); ?>
		</div>
	</div>
</div>
