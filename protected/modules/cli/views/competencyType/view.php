<?php
$this->breadcrumbs=array(
	'Competency Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CompetencyType','url'=>array('index')),
	array('label'=>'Create CompetencyType','url'=>array('create')),
	array('label'=>'Update CompetencyType','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete CompetencyType','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompetencyType','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail CompetencyType #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'name',
			),
		)); ?>
		</div>
	</div>
</div>
