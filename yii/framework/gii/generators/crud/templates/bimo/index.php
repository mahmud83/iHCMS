<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $dataProvider CActiveDataProvider */

<?php
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label',
);\n";
?>

$this->menu=array(
	array('label'=>'Create <?php echo $this->modelClass; ?>', 'url'=>array('create')),
	array('label'=>'Manage <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
);
?>

<div class="page-header">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i> Beranda
            <span class="divider">»</span>
        </li>
        <li>
            <a href="#">Grids</a>
        </li>
    </ul>
                
    <h1 id="main-heading">
        <?php echo $label; ?> <span>The division of content into grids on this template</span>
    </h1>
</div>

<?php echo "<?php"; ?> $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
