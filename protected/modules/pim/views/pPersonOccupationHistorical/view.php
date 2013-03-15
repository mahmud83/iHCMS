<?php
$this->breadcrumbs=array(
	'Pperson Occupation Historicals'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PPersonOccupationHistorical','url'=>array('index')),
	array('label'=>'Create PPersonOccupationHistorical','url'=>array('create')),
	array('label'=>'Update PPersonOccupationHistorical','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete PPersonOccupationHistorical','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PPersonOccupationHistorical','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail PPersonOccupationHistorical #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'person_id',
		'occupation_id',
		'start_date',
		'finish_date',
			),
		)); ?>
		</div>
	</div>
</div>
