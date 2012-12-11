<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cbr_id')); ?>:</b>
	<?php echo CHtml::encode($data->cbr_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tet')); ?>:</b>
	<?php echo CHtml::encode($data->tet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tce')); ?>:</b>
	<?php echo CHtml::encode($data->tce); ?>
	<br />


</div>