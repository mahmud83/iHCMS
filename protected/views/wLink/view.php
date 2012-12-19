<?php
$this->breadcrumbs=array(
	'Wlinks'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List WLink','url'=>array('index')),
	array('label'=>'Create WLink','url'=>array('create')),
	array('label'=>'Update WLink','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete WLink','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WLink','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail WLink #<?php echo $model->id; ?></p>
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
