<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cbr_id')); ?>:</b>
	<?php echo CHtml::encode($data->cbr_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fta')); ?>:</b>
	<?php echo CHtml::encode($data->fta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aid')); ?>:</b>
	<?php echo CHtml::encode($data->aid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amt')); ?>:</b>
	<?php echo CHtml::encode($data->amt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('toi')); ?>:</b>
	<?php echo CHtml::encode($data->toi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prf')); ?>:</b>
	<?php echo CHtml::encode($data->prf); ?>
	<br />


</div>