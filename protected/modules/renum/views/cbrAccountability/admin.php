<?php
$this->breadcrumbs=array(
	'Cbr Accountabilities'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CbrAccountability','url'=>array('index')),
	array('label'=>'Create CbrAccountability','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('cbr-accountability-grid', {
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
			<p>Manajemen Cbr Accountability</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
			'id'=>'cbr-accountability-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
					'id',
		'cbr_id',
		'fta',
		'aid',
		'amt',
		'toi',
		/*
		'prf',
		*/
					array(
						'class'=>'bootstrap.widgets.TbButtonColumn',
					),
				),
			)); ?>
		</div>
	</div>
</div>
