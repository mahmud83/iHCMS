<?php
$this->breadcrumbs=array(
	'Woccupations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List WOccupation','url'=>array('index')),
	array('label'=>'Create WOccupation','url'=>array('create')),
	array('label'=>'Update WOccupation','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete WOccupation','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WOccupation','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail WOccupation #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'code',
		'name',
		'level',
		'parent',
		'w_unit_id',
			),
		)); ?>
		</div>
	</div>
</div>
