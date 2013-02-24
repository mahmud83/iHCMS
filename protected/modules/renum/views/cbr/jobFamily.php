<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Manajemen Cbr</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
				'id'=>'cbr-grid',
				'dataProvider'=>$model->jbSearch(),
				//'filter'=>false,
				'enablePagination'=>false,
				'columns'=>array(
					array(
						'header'=>'Job Family',
						'value'=>'$data->jabatan->jobFamily->name',
					),
					'total_kh',
					'total_pss',
					'total_psp',
					'total_ac',
					'total_kdw',
				),
			)); ?>
		</div>
	</div>
</div>