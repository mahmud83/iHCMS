<?php
$this->breadcrumbs=array(
	'Competency Types',
);

$this->menu=array(
	array('label'=>'Create CompetencyType','url'=>array('create')),
	array('label'=>'Manage CompetencyType','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
