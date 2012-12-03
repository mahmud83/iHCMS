<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('karyawan_id')); ?>:</b>
	<?php echo CHtml::encode($data->karyawan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perusahaan')); ?>:</b>
	<?php echo CHtml::encode($data->perusahaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jabatan')); ?>:</b>
	<?php echo CHtml::encode($data->jabatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_masuk')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_masuk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_keluar')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_keluar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('komentar')); ?>:</b>
	<?php echo CHtml::encode($data->komentar); ?>
	<br />


</div>