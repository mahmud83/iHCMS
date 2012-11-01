<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode),array('view','id'=>$data->kode)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iso3')); ?>:</b>
	<?php echo CHtml::encode($data->iso3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numcode')); ?>:</b>
	<?php echo CHtml::encode($data->numcode); ?>
	<br />


</div>