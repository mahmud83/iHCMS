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
			<img src="<?php echo Yii::app()->request->baseUrl."/user/".$model->avatar."";?>" style="height:150px;" alt="" />
		</div>
		<div class="user-info">
			<h3><?php echo ucfirst("".$model->nama_depan." ".$model->nama_tengah." ".$model->nama_belakang.""); ?></h3>
			<h4>Chief Technical Officer at Snoovmedia</h4>
			<?php echo $model->user->deskripsi; ?>
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
			<a href="<?php echo Yii::app()->createUrl('pim/karyawan/update/', array('id'=>$model->id));?>" class="btn btn-small pull-right"><i class="icon-edit"></i>Ubah</a>
		</div>
		<div class="widget-content">
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
				array('label'=>'Warga Negara', 'value'=>$model->wargaNegara->nama),
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
				array('label'=>'negara', 'value'=>$model->negara0->nama),
				array('label'=>'propinsi', 'value'=>$model->propinsi0->nama),
				'kodepos',
				'tlp_rumah',
				'tlp_mobile',
				'tlp_kantor',
				'email1',
				'email2',
				'custom',
				array('label'=>'User', 'value'=>$model->user->username),
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
						'jenis',
						'institusi',
						'major',
						'nilai',
					),
				));
				?>
				</div>
			</div>
		</div>
		
		<div class="row-fluid">
			<div class="span12 widget">
				<div class="widget-title">
					<i class="icon-bar-chart titleicon"></i>
					<p>Data Pengalaman Kerja</p>
					<a href="<?php echo Yii::app()->createUrl('pim/karyawanpengalamankerja/empdetail/', array('user'=>$model->id));?>" class="btn btn-small pull-right"><i class="icon-edit"></i>Edit</a>
				</div>
				<div class="widget-content">
				<?php
				$this->widget('bootstrap.widgets.TbGridView', array(
					'dataProvider'=>$modelPengalamanKerja,
					'emptyText'=> 'Data Pengalaman Kerja Kosong',
					'summaryText'=>'',
					'columns'=>array(
						'perusahaan',
						'jabatan',
						'tgl_masuk',
						'tgl_keluar',
						/*
						'komentar',
						*/
					),
				));
				?>
				</div>
			</div>
		</div>
		
		<div class="row-fluid">
			<div class="span12 widget">
				<div class="widget-title">
					<i class="icon-bar-chart titleicon"></i>
					<p>Data Sertifikasi</p>
					<a href="<?php echo Yii::app()->createUrl('pim/karyawansertifikasi/empdetail/', array('user'=>$model->id));?>" class="btn btn-small pull-right"><i class="icon-edit"></i>Edit</a>
				</div>
				<div class="widget-content">
				<?php
				$this->widget('bootstrap.widgets.TbGridView', array(
					'dataProvider'=>$modelSertifikasi,
					'emptyText'=> 'Data Sertifikasi Kosong',
					'summaryText'=>'',
					'columns'=>array(
						'jenis',
						'nomor',
						'tgl_dikeluarkan',
						'tgl_berakhir',
					),
				));
				?>
				</div>
			</div>
		</div>
		
		<div class="row-fluid">
			<div class="span12 widget">
				<div class="widget-title">
					<i class="icon-bar-chart titleicon"></i>
					<p>Data Imigrasi</p>
					<a href="<?php echo Yii::app()->createUrl('pim/karyawanimigrasi/empdetail/', array('user'=>$model->id));?>" class="btn btn-small pull-right"><i class="icon-edit"></i>Edit</a>
				</div>
				<div class="widget-content">
				<?php
				$this->widget('bootstrap.widgets.TbGridView', array(
					'dataProvider'=>$modelImigrasi,
					'emptyText'=> 'Data imigrasi Kosong',
					'columns'=>array(
						'nomor_dokumen',
						'status_kelayakan',
					),
				));
				?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span6 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Data Tanggungan</p>
			<a href="<?php echo Yii::app()->createUrl('pim/karyawantanggungan/empdetail/', array('user'=>$model->id));?>" class="btn btn-small pull-right"><i class="icon-edit"></i>Edit</a>
		</div>
		<div class="widget-content">
			<?php
			$this->widget('bootstrap.widgets.TbGridView', array(
				'dataProvider'=>$modelTanggungan,
				'emptyText'=> 'Data Tanggungan Kosong',
				'summaryText'=>'',
				'columns'=>array(
					'nama',
					'relasi',
					'tgl_lahir',
				),
			));
			?>
		</div>
	</div>
	
	<div class="span6 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Data Kontak Darurat</p>
			<a href="<?php echo Yii::app()->createUrl('pim/karyawankontakdarurat/empdetail/', array('user'=>$model->id));?>" class="btn btn-small pull-right"><i class="icon-edit"></i>Edit</a>
		</div>
		<div class="widget-content">
			<?php
			$this->widget('bootstrap.widgets.TbGridView', array(
				'dataProvider'=>$modelKontakDarurat,
				'emptyText'=> 'Data Kontak Darurat Kosong',
				'summaryText'=>'',
				'columns'=>array(
					'nama',
					'relasi',
					'telp_rumah',
					'telp_mobile',
				),
			));
			?>
		</div>
	</div>
</div>
