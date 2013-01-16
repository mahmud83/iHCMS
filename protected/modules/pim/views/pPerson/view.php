<?php
$this->breadcrumbs=array(
	'Ppeople'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PPerson','url'=>array('index')),
	array('label'=>'Create PPerson','url'=>array('create')),
	array('label'=>'Update PPerson','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete PPerson','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PPerson','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail PPerson #<?php echo $model->id; ?></p>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'user_id',
		'jabatan_id',
		'avatar',
		'employee_status',
		'employee_code',
		'firstname',
		'lastname',
		'nickname',
		'birth_date',
		'birth_place',
		'blood_id',
		'marital_id',
		'sex_id',
		'religion_id',
		'address1',
		'address2',
		'pos_code',
		'identity_number',
		'identity_valid',
		'identity_state',
		'identity_pos_code',
		'driver_license_number',
		'driver_license_valid',
		'email1',
		'email2',
		'phone_mobile',
		'phone_home',
		'phone_office',
		'custom',
		'create_date',
		'create_by',
		'modified_date',
		'modified_by',
			),
		)); ?>
		</div>
	</div>
</div>
