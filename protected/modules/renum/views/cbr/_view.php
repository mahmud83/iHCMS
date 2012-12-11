<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jabatan_id')); ?>:</b>
	<?php echo CHtml::encode($data->jabatan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kh_score')); ?>:</b>
	<?php echo CHtml::encode($data->kh_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ps_persent')); ?>:</b>
	<?php echo CHtml::encode($data->ps_persent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ps_score')); ?>:</b>
	<?php echo CHtml::encode($data->ps_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ac_score')); ?>:</b>
	<?php echo CHtml::encode($data->ac_score); ?>
	<br />


</div>