<?php
/* @var $this PreferenceController */
/* @var $model Preference */

$this->breadcrumbs=array(
	'Preferences'=>array('index'),
	$model->name=>array('view','id'=>$model->name),
	'Update',
);

$this->menu=array(
	array('label'=>'List Preference', 'url'=>array('index')),
	array('label'=>'Create Preference', 'url'=>array('create')),
	array('label'=>'View Preference', 'url'=>array('view', 'id'=>$model->name)),
	array('label'=>'Manage Preference', 'url'=>array('admin')),
);
?>

<h1>Update Preference <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>