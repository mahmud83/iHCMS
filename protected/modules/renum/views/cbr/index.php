<?php
$this->breadcrumbs=array(
	'Cbrs'=>array('index'),
	'Manage',
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Manajemen Cbr</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView',array(
				'id'=>'cbr-grid',
				'type'=>'striped',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'columns'=>array(
					//'id',
					//'jabatan_id',
					array(
						'header' => 'Jabatan',
						'name' => 'jabatan_id',
                        'value'=>'$data->jabatan->name." (".$data->jabatan->wUnit->name.") "',
                        'sortable' => true,
					),
					//'date',
					'kh_score',
					'ps_persent',
					'ps_score',
					'ac_score',
				),
			)); ?>
		</div>
	</div>
</div>
