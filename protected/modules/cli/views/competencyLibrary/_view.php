<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimension')); ?>:</b>
	<?php echo CHtml::encode($data->dimension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('definition')); ?>:</b>
	<?php echo CHtml::encode($data->definition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level_1')); ?>:</b>
	<?php echo CHtml::encode($data->level_1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('level_2')); ?>:</b>
	<?php echo CHtml::encode($data->level_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level_3')); ?>:</b>
	<?php echo CHtml::encode($data->level_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level_4')); ?>:</b>
	<?php echo CHtml::encode($data->level_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level_5')); ?>:</b>
	<?php echo CHtml::encode($data->level_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dictionary_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->dictionary_type_id); ?>
	<br />

	*/ ?>

</div>