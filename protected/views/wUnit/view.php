<?php
$this->breadcrumbs=array(
	'Wunits'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List WUnit','url'=>array('index')),
	array('label'=>'Create WUnit','url'=>array('create')),
	array('label'=>'Update WUnit','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete WUnit','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WUnit','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail WUnit #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'code',
		'name',
		'level',
		'parent_id',
			),
		)); ?>
		</div>
	</div>
</div>
