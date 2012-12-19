<?php
$this->breadcrumbs=array(
	'Wcountries'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List WCountry','url'=>array('index')),
	array('label'=>'Create WCountry','url'=>array('create')),
	array('label'=>'Update WCountry','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete WCountry','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WCountry','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail WCountry #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'code',
		'name',
		'iso3',
		'numcode',
			),
		)); ?>
		</div>
	</div>
</div>
