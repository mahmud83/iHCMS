<?php
$this->breadcrumbs=array(
	'Competency Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CompetencyCategory','url'=>array('index')),
	array('label'=>'Create CompetencyCategory','url'=>array('create')),
	array('label'=>'Update CompetencyCategory','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete CompetencyCategory','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompetencyCategory','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail CompetencyCategory #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'code',
		'name',
		'description',
		'definition',
		'competency_type_id',
			),
		)); ?>
		</div>
	</div>
</div>
