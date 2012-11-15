<?php
$this->breadcrumbs=array(
	'Propinsis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Propinsi','url'=>array('index')),
	array('label'=>'Create Propinsi','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('propinsi-grid', {
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
			<p>Manajemen Propinsi</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
				'id'=>'propinsi-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'columns'=>array(
					'id',
					'nama',
					'kode',
					array('name'=>'negara_id', 'header'=>'negara_id', 'value'=>'$data->negara->nama'),
					array(
						'class'=>'bootstrap.widgets.TbButtonColumn',
					),
				),
			)); ?>
		</div>
	</div>
</div>
