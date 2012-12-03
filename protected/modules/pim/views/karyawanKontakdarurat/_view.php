<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('karyawan_id')); ?>:</b>
	<?php echo CHtml::encode($data->karyawan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('relasi')); ?>:</b>
	<?php echo CHtml::encode($data->relasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telp_rumah')); ?>:</b>
	<?php echo CHtml::encode($data->telp_rumah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telp_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->telp_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telp_kantor')); ?>:</b>
	<?php echo CHtml::encode($data->telp_kantor); ?>
	<br />


</div>