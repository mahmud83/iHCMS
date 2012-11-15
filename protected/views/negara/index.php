<?php
$this->menu=array(
	array('label'=>'Create Negara', 'url'=>array('create')),
	array('label'=>'Manage Negara', 'url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Daftar Negara</p>
		</div>
		<div class="widget-content">
			<?php 
			$this->widget('bootstrap.widgets.TbGridView',array(
				'id'=>'negara-grid',
				'dataProvider'=>$dataProvider->search(),
				'filter'=>$dataProvider,
				'columns'=>array(
					'kode',
					'nama',
					'iso3',
					'numcode',
				),
			)); ?>
			
		</div>
	</div>
</div>
