<?php
$this->breadcrumbs=array(
	'Competency Categories',
);

$this->menu=array(
	array('label'=>'Create CompetencyCategory','url'=>array('create')),
	array('label'=>'Manage CompetencyCategory','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
