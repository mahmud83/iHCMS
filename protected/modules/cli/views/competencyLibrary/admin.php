<?php
$this->breadcrumbs=array(
	'Competency Libraries'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CompetencyLibrary','url'=>array('index')),
	array('label'=>'Create CompetencyLibrary','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('competency-library-grid', {
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
			<p>Manajemen Competency Library</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
			'id'=>'competency-library-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
					'id',
		'code',
		'dimension',
		'name',
		'description',
		'definition',
		/*
		'level_1',
		'level_2',
		'level_3',
		'level_4',
		'level_5',
		'date',
		'active',
		'dictionary_type_id',
		*/
					array(
						'class'=>'bootstrap.widgets.TbButtonColumn',
					),
				),
			)); ?>
		</div>
	</div>
</div>
