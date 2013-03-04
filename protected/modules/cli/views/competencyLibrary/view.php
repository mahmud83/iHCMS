<?php
$this->breadcrumbs=array(
	'Competency Libraries'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CompetencyLibrary','url'=>array('index')),
	array('label'=>'Create CompetencyLibrary','url'=>array('create')),
	array('label'=>'Update CompetencyLibrary','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete CompetencyLibrary','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompetencyLibrary','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail CompetencyLibrary #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'code',
		'dimension',
		'name',
		'description',
		'definition',
		'level_1',
		'level_2',
		'level_3',
		'level_4',
		'level_5',
		'date',
		'active',
		'dictionary_type_id',
			),
		)); ?>
		</div>
	</div>
</div>
