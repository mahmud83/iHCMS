<div class="span4">
	<div class="row-fluid">
		<div class="span4">
			<img />
		</div>
		<div class="span6">
			<b> Nama Lengkap </b><?php echo CHtml::encode($data->firstname)." ".CHtml::encode($data->lastname); ?></br>
		</div>
	</div>
</div>


<?php
/*
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jabatan_id')); ?>:</b>
	<?php echo CHtml::encode($data->jabatan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avatar')); ?>:</b>
	<?php echo CHtml::encode($data->avatar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_status')); ?>:</b>
	<?php echo CHtml::encode($data->employee_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_code')); ?>:</b>
	<?php echo CHtml::encode($data->employee_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstname')); ?>:</b>
	<?php echo CHtml::encode($data->firstname); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lastname')); ?>:</b>
	<?php echo CHtml::encode($data->lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nickname')); ?>:</b>
	<?php echo CHtml::encode($data->nickname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birth_date')); ?>:</b>
	<?php echo CHtml::encode($data->birth_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birth_place')); ?>:</b>
	<?php echo CHtml::encode($data->birth_place); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blood_id')); ?>:</b>
	<?php echo CHtml::encode($data->blood_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_id')); ?>:</b>
	<?php echo CHtml::encode($data->marital_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sex_id')); ?>:</b>
	<?php echo CHtml::encode($data->sex_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('religion_id')); ?>:</b>
	<?php echo CHtml::encode($data->religion_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address1')); ?>:</b>
	<?php echo CHtml::encode($data->address1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address2')); ?>:</b>
	<?php echo CHtml::encode($data->address2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pos_code')); ?>:</b>
	<?php echo CHtml::encode($data->pos_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identity_number')); ?>:</b>
	<?php echo CHtml::encode($data->identity_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identity_valid')); ?>:</b>
	<?php echo CHtml::encode($data->identity_valid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identity_state')); ?>:</b>
	<?php echo CHtml::encode($data->identity_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identity_pos_code')); ?>:</b>
	<?php echo CHtml::encode($data->identity_pos_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('driver_license_number')); ?>:</b>
	<?php echo CHtml::encode($data->driver_license_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('driver_license_valid')); ?>:</b>
	<?php echo CHtml::encode($data->driver_license_valid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email1')); ?>:</b>
	<?php echo CHtml::encode($data->email1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email2')); ?>:</b>
	<?php echo CHtml::encode($data->email2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->phone_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_home')); ?>:</b>
	<?php echo CHtml::encode($data->phone_home); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_office')); ?>:</b>
	<?php echo CHtml::encode($data->phone_office); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('custom')); ?>:</b>
	<?php echo CHtml::encode($data->custom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_by')); ?>:</b>
	<?php echo CHtml::encode($data->create_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_date')); ?>:</b>
	<?php echo CHtml::encode($data->modified_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_by')); ?>:</b>
	<?php echo CHtml::encode($data->modified_by); ?>
	<br />

	*/ ?>

</div>