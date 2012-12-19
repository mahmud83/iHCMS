<?php
$this->breadcrumbs=array(
	'Wmodules'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List WModule','url'=>array('index')),
	array('label'=>'Create WModule','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('wmodule-grid', {
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
			<p>Manajemen Wmodule</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
			'id'=>'wmodule-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id',
				'parent_id',
				'name',
				'title',
				'description',
				'url',
				/*
				'image',
				*/
				array(
					'class'=>'bootstrap.widgets.TbButtonColumn',
				),
			),
			)); ?>
		</div>
	</div>
</div>
