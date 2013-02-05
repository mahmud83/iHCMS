<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('person_id')); ?>:</b>
	<?php echo CHtml::encode($data->person_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level')); ?>:</b>
	<?php echo CHtml::encode($data->level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institution_name')); ?>:</b>
	<?php echo CHtml::encode($data->institution_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institution_major')); ?>:</b>
	<?php echo CHtml::encode($data->institution_major); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpa_score')); ?>:</b>
	<?php echo CHtml::encode($data->gpa_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_masuk')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_masuk); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_keluar')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_keluar); ?>
	<br />

	*/ ?>

</div>