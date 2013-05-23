<?php
/* @var $this WModuleController */
/* @var $model WModule */

$this->breadcrumbs=array(
	'Wmodules'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WModule', 'url'=>array('index')),
	array('label'=>'Manage WModule', 'url'=>array('admin')),
);
?>

<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Wmodules'=>array('index'),
            'Create',
        ),
    ));
    ?>

    <h1 id="main-heading">
        Tambah Data Modul <span>menambah data modul pada aplikasi</span>
    </h1>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header">
                    <span class="title">
                        <i class="icon-edit"></i> Form
                    </span>
                </div>
                <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
            </div>
        </div>
    </div>
</div>

