<?php
$this->breadcrumbs=array(
	'Wstates'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List WState','url'=>array('index')),
	array('label'=>'Create WState','url'=>array('create')),
	array('label'=>'Update WState','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete WState','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WState','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail WState #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'name',
		'code',
		'country_id',
			),
		)); ?>
		</div>
	</div>
</div>
