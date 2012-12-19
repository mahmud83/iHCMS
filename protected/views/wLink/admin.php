<?php
$this->breadcrumbs=array(
	'Wlinks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List WLink','url'=>array('index')),
	array('label'=>'Create WLink','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('wlink-grid', {
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
			<p>Manajemen Wlink</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
			'id'=>'wlink-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
					'id',
		'parent_id',
		'name',
		'title',
		'url',
		'image',
		/*
		'auth',
		*/
					array(
						'class'=>'bootstrap.widgets.TbButtonColumn',
					),
				),
			)); ?>
		</div>
	</div>
</div>
