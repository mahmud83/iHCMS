<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Wlinks'=>array('index'),
            $model->name,
        ),
    ));
    ?>

    <h1 id="main-heading">
        Detail Menu <span>data detail menu pada aplikasi</span>
    </h1>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header">
                    <span class="title">Detail data menu #<?php echo $model->id; ?></span>
                </div>
                <div class="widget-content table-container">
                    <table class="table table-striped table-detail-view">
                        <tbody>
                            <tr>
                                <th><?php echo $model->getAttributeLabel('id');?></th>
                                <td><?php echo $model->id;?></td>
                            </tr>
                            <tr>
                                <th><?php echo $model->getAttributeLabel('parent_id');?></th>
                                <td><?php echo $model->parent_id;?></td>
                            </tr>
                            <tr>
                                <th><?php echo $model->getAttributeLabel('name');?></th>
                                <td><?php echo $model->name;?></td>
                            </tr>
                            <tr>
                                <th><?php echo $model->getAttributeLabel('title');?></th>
                                <td><?php echo $model->title;?></td>
                            </tr>
                            <tr>
                                <th><?php echo $model->getAttributeLabel('url');?></th>
                                <td><?php echo $model->url;?></td>
                            </tr>
                            <tr>
                                <th><?php echo $model->getAttributeLabel('image');?></th>
                                <td><?php echo $model->image;?></td>
                            </tr>
                            <tr>
                                <th><?php echo $model->getAttributeLabel('auth');?></th>
                                <td><?php echo $model->auth;?></td>
                            </tr>
                            <tr>
                                <th><?php echo $model->getAttributeLabel('w_module_id');?></th>
                                <td><?php echo $model->w_module_id;?></td>
                            </tr>
                            <tr>
                                <th><?php echo $model->getAttributeLabel('ordering');?></th>
                                <td><?php echo $model->ordering;?></td>
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
