<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('karyawan_id')); ?>:</b>
	<?php echo CHtml::encode($data->karyawan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor_dokumen')); ?>:</b>
	<?php echo CHtml::encode($data->nomor_dokumen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_dikeluarkan')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_dikeluarkan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_berakhir')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_berakhir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_kelayakan')); ?>:</b>
	<?php echo CHtml::encode($data->status_kelayakan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('review_date')); ?>:</b>
	<?php echo CHtml::encode($data->review_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('negara_id')); ?>:</b>
	<?php echo CHtml::encode($data->negara_id); ?>
	<br />

	*/ ?>

</div>