<?php
/* @var $this PreferenceController */
/* @var $model Preference */

$this->breadcrumbs=array(
	'Preferences'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Preference', 'url'=>array('index')),
	array('label'=>'Create Preference', 'url'=>array('create')),
	array('label'=>'Update Preference', 'url'=>array('update', 'id'=>$model->name)),
	array('label'=>'Delete Preference', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->name),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Preference', 'url'=>array('admin')),
);
?>

<h1>View Preference #<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'value',
	),
)); ?>
