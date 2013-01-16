<?php
$this->breadcrumbs=array(
	'Ppeople'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PPerson','url'=>array('index')),
	array('label'=>'Create PPerson','url'=>array('create')),
);


?>

<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Manajemen Pperson</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
			'id'=>'pperson-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
					'id',
					'user_id',
					'jabatan_id',
					//'avatar',
					'employee_status',
					'employee_code',
					/*
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
					*/
					array(
						'class'=>'bootstrap.widgets.TbButtonColumn',
					),
				),
			)); ?>
		</div>
	</div>
</div>
