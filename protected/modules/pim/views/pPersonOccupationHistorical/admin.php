<?php
$this->breadcrumbs=array(
	'Pperson Occupation Historicals'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PPersonOccupationHistorical','url'=>array('index')),
	array('label'=>'Create PPersonOccupationHistorical','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('pperson-occupation-historical-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Manajemen Pperson Occupation Historical</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
			'id'=>'pperson-occupation-historical-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
					'id',
		'person_id',
		'occupation_id',
		'start_date',
		'finish_date',
					array(
						'class'=>'bootstrap.widgets.TbButtonColumn',
					),
				),
			)); ?>
		</div>
	</div>
</div>
