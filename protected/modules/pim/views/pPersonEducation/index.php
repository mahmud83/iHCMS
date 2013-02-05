<?php
$this->breadcrumbs=array(
	'Pperson Educations',
);

$this->menu=array(
	array('label'=>'Create PPersonEducation','url'=>array('create')),
	array('label'=>'Manage PPersonEducation','url'=>array('admin')),
);
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
