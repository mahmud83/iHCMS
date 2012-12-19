<?php
$this->breadcrumbs=array(
	'Links'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Link','url'=>array('index')),
	array('label'=>'Create Link','url'=>array('create')),
	array('label'=>'Update Link','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Link','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Link','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail Link #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'parent_id',
		'name',
		'title',
		'url',
		'image',
		'auth',
			),
		)); ?>
		</div>
	</div>
</div>
