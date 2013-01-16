<?php
$this->breadcrumbs=array(
	'Wusers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List WUser','url'=>array('index')),
	array('label'=>'Create WUser','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('wuser-grid', {
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
			<p>Manajemen Wuser</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
			'id'=>'wuser-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				//'id',
				'username',
				//'password',
				//'hash',
				//'created_date',
				array('name'=>'created_date', 'value'=>'date("d F Y", strtotime($data->created_date))'),
				//'created_by',
				array('name'=>'created_by', 'value'=>'$data->createdBy->username'),
				/*
				'modified_date',
				'modified_by',
				'description',
				*/
				array('name'=>'status_id', 'value'=>'WUser::model()->userStatus($data->status_id)'),
					array(
						'class'=>'bootstrap.widgets.TbButtonColumn',
						'template'=>'{view}{update}{change password}{delete}',
					    'buttons'=>array
					    (
					        'change password' => array
					        (
					            //'label'=>'Change Password',
					            'icon'=>'icon-lock',
					            //'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
					            'url'=>'Yii::app()->createUrl("wUser/changePassword", array("id"=>$data->id))',
					        ),
					    ),
					),
				),
			)); ?>
		</div>
	</div>
</div>
