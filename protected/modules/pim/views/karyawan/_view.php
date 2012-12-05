<li>
	<a href="<?php echo Yii::app()->createAbsoluteUrl('pim/karyawan/detailemp/id/'.CHtml::encode($data->id).''); ?>" class="user-img"><img src="/ihcms/user/<?php echo CHtml::encode($data->avatar); ?>" width="50px" /></a>
	<div class="user-info">
		<a href="<?php echo Yii::app()->createAbsoluteUrl('pim/karyawan/detailemp/id/'.CHtml::encode($data->id).''); ?>">
			<strong><?php echo CHtml::encode($data->nama_depan); ?> <?php echo CHtml::encode($data->nama_tengah); ?> <?php echo CHtml::encode($data->nama_belakang); ?></strong>
		</a>
		<i class="user-occ">
			<?php echo CHtml::encode($data->getAttributeLabel('nip')); ?>: <?php echo CHtml::encode($data->nip); ?>
		</i>
		<i class="user-ll"><?php echo CHtml::encode($data->tgl_lahir); ?></i>
	</div>
</li>
