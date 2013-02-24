<?php
$this->breadcrumbs=array(
	'Wjob Families'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List WJobFamily','url'=>array('index')),
	array('label'=>'Create WJobFamily','url'=>array('create')),
	array('label'=>'Update WJobFamily','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete WJobFamily','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WJobFamily','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail WJobFamily #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'name',
		'information',
			),
		)); ?>
		</div>
	</div>
</div>
