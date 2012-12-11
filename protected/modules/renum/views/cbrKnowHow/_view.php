<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cbr_id')); ?>:</b>
	<?php echo CHtml::encode($data->cbr_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tkh')); ?>:</b>
	<?php echo CHtml::encode($data->tkh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mkh')); ?>:</b>
	<?php echo CHtml::encode($data->mkh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hrs')); ?>:</b>
	<?php echo CHtml::encode($data->hrs); ?>
	<br />


</div>