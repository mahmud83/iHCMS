<?php
$this->breadcrumbs=array(
	'Negaras'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Negara','url'=>array('index')),
	array('label'=>'Create Negara','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('negara-grid', {
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
			<p>Manajemen Negara</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
				'id'=>'negara-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'columns'=>array(
					'kode',
					'nama',
					'iso3',
					'numcode',
					array(
						'class'=>'bootstrap.widgets.TbButtonColumn',
					),
				),
			)); ?>
		</div>
	</div>
</div>