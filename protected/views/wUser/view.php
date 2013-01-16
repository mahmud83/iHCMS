<?php
$this->breadcrumbs=array(
	'Wusers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List User','url'=>array('index')),
	array('label'=>'Create User','url'=>array('create')),
	array('label'=>'Update User','url'=>array('update','id'=>$model->id)),
	array('label'=>'Change Password','url'=>array('changePassword','id'=>$model->id)),
	array('label'=>'Delete User','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail User <?php echo $model->username; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'username',
				//'password',
				array('name'=>'password', 'value'=>'*********'),
				//'hash',
				//'created_date',
				array('name'=>'created_date', 'value'=>date('d F Y', strtotime($model->created_date))),
				//'created_by',
				//'modified_date',
				//'modified_by',
				//'description',
				array('name'=>'description', 'type'=>'raw'),
				//'status_id',
				array('name'=>'status_id', 'value'=>$model->status_id==1?'aktif':'non aktif'),
					),
				)); ?>
		</div>
	</div>
</div>
