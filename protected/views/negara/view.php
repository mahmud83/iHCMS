<?php
$this->breadcrumbs=array(
	'Negaras'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Negara','url'=>array('index')),
	array('label'=>'Create Negara','url'=>array('create')),
	array('label'=>'Update Negara','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Negara','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Negara','url'=>array('admin')),
);
?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Detail Negara</p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbDetailView',array(
				'data'=>$model,
				'attributes'=>array(
					'id',
					'kode',
					'nama',
					'iso3',
					'numcode',
				),
			));
			?>
		</div>
	</div>
</div>