<?php
/* @var $this WModuleController */
/* @var $model WModule */

$this->breadcrumbs = array(
    'Wmodules' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List WModule', 'url' => array('index')),
    array('label' => 'Create WModule', 'url' => array('create')),
    array('label' => 'Update WModule', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete WModule', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
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
        Detail Modul <span>data detail modul pada aplikasi</span>
    </h1>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header">
                    <span class="title">Detail data modul #<?php echo $model->id; ?></span>
                </div>
                <div class="widget-content table-container">
                    <table class="table table-striped table-detail-view">
                        <tbody>
                            <tr>
                                <th>Id</th>
                                <td><?php echo $model->id;?></td>
                            </tr>
                            <tr>
                                <th>Parent Id</th>
                                <td><?php echo $model->parent_id;?></td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td><?php echo $model->name;?></td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td><?php echo $model->title;?></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td><?php echo $model->description;?></td>
                            </tr>
                            <tr>
                                <th>Url</th>
                                <td><?php echo $model->url;?></td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td><?php echo $model->image;?></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2">
                                    <div class="btn-toolbar pull-right"> 
                                        <div class="btn-group">
                                            <?php echo CHtml::link('<button class="btn" rel="tooltip" title="Schedule"><i class="icon-plus"></i></button> ', array('create'));?>                                                           
                                            <?php echo CHtml::link('<button class="btn" rel="tooltip" title="Edit"><i class="icon-pencil"></i></button>', array('update', 'id' => $model->id));?>
                                            <?php echo CHtml::link('<button class="btn" rel="tooltip" title="Edit"><i class="icon-trash"></i></button>', '#', array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?'));?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


