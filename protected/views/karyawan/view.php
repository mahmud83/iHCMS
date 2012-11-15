<?php
$this->breadcrumbs=array(
	'Karyawans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Karyawan','url'=>array('index')),
	array('label'=>'Create Karyawan','url'=>array('create')),
	array('label'=>'Update Karyawan','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Karyawan','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Karyawan','url'=>array('admin')),
);
?>

<h1>View Karyawan #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nip',
		'nama_depan',
		'nama_tengah',
		'nama_belakang',
		'nama_panggilan',
		'tgl_lahir',
		'warga_negara',
		'kelamin',
		'no_ktp',
		'no_ktp_exp_date',
		'no_sim',
		'no_sim_exp_date',
		'status_kawin',
		'status_karyawan',
		'alamat1',
		'alamat2',
		'kota',
		'negara',
		'propinsi',
		'kodepos',
		'tlp_rumah',
		'tlp_mobile',
		'tlp_kantor',
		'email1',
		'email2',
		'custom',
	),
)); ?>
