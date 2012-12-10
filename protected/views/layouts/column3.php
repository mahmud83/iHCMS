<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
	<div class="span10">
		<?php echo $content; ?>
	</div>
	
	<div class="span2">
		<?php
			/*$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operations',
			));*/
			
			$this->widget('application.components.widgets.SideUser', array(
				'karyawanId'=>$this->karyawanId,
				'columns' => array(
					'nama',
					'tgl_lahir',
					'warga_negara',
					'kelamin',
				),
			));
			/*$this->endWidget();*/
		?>
		
	</div>
</div>

<?php $this->endContent(); ?>