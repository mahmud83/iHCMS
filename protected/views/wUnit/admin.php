<?php
$this->breadcrumbs=array(
	'Wunits'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List WUnit','url'=>array('index')),
	array('label'=>'Create WUnit','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('wunit-grid', {
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
			<p>Manajemen Wunit</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
			'id'=>'wunit-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
					'id',
		'code',
		'name',
		'level',
		'parent_id',
					array(
						'class'=>'bootstrap.widgets.TbButtonColumn',
					),
				),
			)); ?>
		</div>
	</div>
</div>
