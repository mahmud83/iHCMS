<?php
$this->breadcrumbs=array(
	'Woccupations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List WOccupation','url'=>array('index')),
	array('label'=>'Create WOccupation','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('woccupation-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Manajemen Woccupation</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
				'id'=>'woccupation-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'columns'=>array(
					//'id',
					//'code',
					'name',
					//'level',
					//'parent',
					array(
						'header' => 'Atasan',
						'name' => 'parent',
                        'value'=>'$data->parent0->name',
                        'sortable' => true,
					),
					//'w_unit_id',
					array(
						'header' => 'Unit',
						'name' => 'w_unit_id',
                        'value'=>'$data->wUnit->name',
                        'sortable' => true,
					),
					//'job_family',
					array(
						'header' => 'Job Family',
						'name' => 'job_family',
                        'value'=>'$data->jobFamily->name',
                        'sortable' => true,
					),
					array(
						'class'=>'bootstrap.widgets.TbButtonColumn',
					),
				),
			)); ?>
		</div>
	</div>
</div>
