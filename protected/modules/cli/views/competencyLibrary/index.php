<?php
$this->breadcrumbs=array(
	'Competency Libraries',
);

$this->menu=array(
	array('label'=>'Create CompetencyLibrary','url'=>array('create')),
	array('label'=>'Manage CompetencyLibrary','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
