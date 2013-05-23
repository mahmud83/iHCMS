<?php
/* @var $this WModuleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Wmodules',
);

$this->menu = array(
    array('label' => 'Create WModule', 'url' => array('create')),
    array('label' => 'Manage WModule', 'url' => array('admin')),
);
?>

<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array('Wmodules'),
    ));
    ?>

    <h1 id="main-heading">
        Manajemen Modul <span>pengelolaan modul pada aplikasi</span>
    </h1>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header">
                    <span class="title">
                        <i class="icon-table"></i> Daftar Data Modul
                    </span>
                </div>
                <?php
                $this->widget('ext.battleship.widgets.GridView', array(
                    'id' => 'wmodule-grid',
                    'type' => 'striped',
                    'htmlOptions' => array('class' => 'widget-content table-container'),
                    'dataProvider' => $dataProvider,
                    'template' => "{items}",
                    'columns' => array(
                        //'id',
                        'parent_id',
                        'name',
                        'title',
                        'description',
                        'url',
                        'image',
                    ),
                ));
                ?>
            </div>
        </div>
    </div>
</div>
