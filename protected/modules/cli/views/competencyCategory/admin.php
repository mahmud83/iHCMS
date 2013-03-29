<?php
$this->breadcrumbs=array(
	'Competency Categories'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CompetencyCategory','url'=>array('index')),
	array('label'=>'Create CompetencyCategory','url'=>array('create')),
);

?>

<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Manajemen Competency Category</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
			'id'=>'competency-category-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
					'id',
		'code',
		'name',
		'description',
		'definition',
		'competency_type_id',
					array(
						'class'=>'bootstrap.widgets.TbButtonColumn',
					),
				),
			)); ?>
		</div>
	</div>
</div>
