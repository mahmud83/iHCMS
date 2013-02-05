<?php

$this->menu=array(
	array('label'=>'List Karyawan','url'=>array('index')),
	array('label'=>'Create Karyawan','url'=>array('create')),
	array('label'=>'Update Karyawan','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Karyawan','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Karyawan','url'=>array('admin')),
);
?>
<!-- user profile !-->
<div class="row-fluid no-clear">
	<div class="span12 user-profile">
		<div class="user-avatar">
			<img src="<?php echo Yii::app()->request->baseUrl."/avatar/".$model->avatar."";?>" style="height:150px;" alt="" />
		</div>
		<div class="user-info">
			<h3><?php echo ucfirst("".$model->firstname." ".$model->lastname.""); ?></h3>
			<h4>Chief Technical Officer at Snoovmedia</h4>
			<?php echo $model->user->description; ?>
		</div>
		<ul class="user-competency">
			<li>Soft Competency <strong><a href="competency.html">77.86%</a></strong></li>
			<li>Hard Competeny <strong><a href="competency.html">60.98%</a></strong></li>
			<li>Managerial Competeny <strong><a href="competency.html">72.12%</a></strong></li>
			<li>Production Competency <strong><a href="competency.html">82.30%</a></strong></li>
		</ul>
	</div>
</div>

<div class="row-fluid">
	<div class="span6 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail Karyawan</p>
			<a href="<?php echo Yii::app()->createUrl('pim/pPerson/update/', array('id'=>$model->id));?>" class="btn btn-small pull-right"><i class="icon-edit"></i>Ubah</a>
		</div>
		<div class="widget-content">
		<?php $this->widget('bootstrap.widgets.TbDetailView',array(
			'data'=>$model,
			'attributes'=>array(
				'id',
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
				'identity_pos_code'
			),
		)); ?>
		</div>
	</div>
	
	<div class="span6">
		<div class="row-fluid">
			<div class="span12 widget">
				<div class="widget-title">
					<i class="icon-bar-chart titleicon"></i>
					<p>Data Pendidikan</p>
					<a href="<?php echo Yii::app()->createUrl('pim/karyawanpendidikan/empdetail/', array('user'=>$model->id));?>" class="btn btn-small pull-right"><i class="icon-edit"></i>Ubah</a>
				</div>
				<div class="widget-content">
				<?php
				$this->widget('bootstrap.widgets.TbGridView', array(
					'id'=>'karyawan-pendidikan-grid',
					'dataProvider'=>$modelPendidikan,
					'emptyText'=> 'Data pendidikan Kosong',
					'summaryText'=>'',
					'columns'=>array(
						'level',
						'institution_name',
						'institution_major',
						'gpa_score',
					),
				));
				?>
				</div>
			</div>
		</div>
	</div>
	
</div>
