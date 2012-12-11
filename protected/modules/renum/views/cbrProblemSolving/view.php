<?php
$this->breadcrumbs=array(
	'Cbr Problem Solvings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CbrProblemSolving','url'=>array('index')),
	array('label'=>'Create CbrProblemSolving','url'=>array('create')),
	array('label'=>'Update CbrProblemSolving','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete CbrProblemSolving','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CbrProblemSolving','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail CbrProblemSolving #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'cbr_id',
		'tet',
		'tce',
			),
		)); ?>
		</div>
	</div>
</div>
