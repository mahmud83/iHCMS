<?php
$this->breadcrumbs=array(
	'Wjob Families'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List WJobFamily','url'=>array('index')),
	array('label'=>'Create WJobFamily','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('wjob-family-grid', {
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
			<p>Manajemen Wjob Family</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
			'id'=>'wjob-family-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
					'id',
		'name',
		'information',
					array(
						'class'=>'bootstrap.widgets.TbButtonColumn',
					),
				),
			)); ?>
		</div>
	</div>
</div>
