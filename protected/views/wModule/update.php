<?php
/* @var $this WModuleController */
/* @var $model WModule */

$this->breadcrumbs = array(
    'Wmodules' => array('index'),
    $model->name => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List WModule', 'url' => array('index')),
    array('label' => 'Create WModule', 'url' => array('create')),
    array('label' => 'View WModule', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage WModule', 'url' => array('admin')),
);
?>

<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Wmodules' => array('index'),
            $model->name => array('view', 'id' => $model->id),
            'Update',
        ),
    ));
    ?>

    <h1 id="main-heading">
        Ubah Data Modul <span>mengubah data modul pada aplikasi</span>
    </h1>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header">
                    <span class="title">
                        <i class="icon-edit"></i> Form id <?php echo $model->id; ?>
                    </span>
                </div>
                <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
            </div>
        </div>
    </div>
</div>