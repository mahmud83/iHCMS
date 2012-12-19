<?php
$this->breadcrumbs=array(
	'Wpreferences'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List WPreference','url'=>array('index')),
	array('label'=>'Create WPreference','url'=>array('create')),
	array('label'=>'Update WPreference','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete WPreference','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WPreference','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail WPreference #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'name',
		'value',
			),
		)); ?>
		</div>
	</div>
</div>
