<?php
$this->breadcrumbs=array(
	'Preferences'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Preference','url'=>array('index')),
	array('label'=>'Create Preference','url'=>array('create')),
	array('label'=>'Update Preference','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Preference','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Preference','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail Preference #<?php echo $model->id; ?></p>
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
