<?php
$this->breadcrumbs=array(
	'Wmodules'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List WModule','url'=>array('index')),
	array('label'=>'Create WModule','url'=>array('create')),
	array('label'=>'Update WModule','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete WModule','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WModule','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail WModule #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'parent_id',
		'name',
		'title',
		'description',
		'url',
		'image',
			),
		)); ?>
		</div>
	</div>
</div>
