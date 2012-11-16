<?php
$this->breadcrumbs=array(
	'Karyawans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Karyawan','url'=>array('index')),
	array('label'=>'Create Karyawan','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('karyawan-grid', {
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
			<p>Manajemen Karyawan</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
			'id'=>'karyawan-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
					'id',
					'nip',
					'nama_lkp',
					//'nama_tengah',
					//'nama_belakang',
					//'nama_panggilan',
					'kelamin',
					array('name'=>'warga_negara', 'value'=>'$data->wargaNegara->nama'),								/*
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
					*/
					array(
						'class'=>'bootstrap.widgets.TbButtonColumn',
					),
				),
			)); ?>
		</div>
	</div>
</div>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
