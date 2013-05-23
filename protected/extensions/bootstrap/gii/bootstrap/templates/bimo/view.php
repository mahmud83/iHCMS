<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<div class="page-header">
    <?php
    echo "<?php\n";
    $nameColumn=$this->guessNameColumn($this->tableSchema->columns);
    $label=$this->pluralize($this->class2name($this->modelClass));
    echo "\$this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Wlinks'=>array('index'),
            \$model->{$nameColumn},
        ),
    ));\n";
    ?>
    ?>

    <h1 id="main-heading">
        Detail <?php echo $this->modelClass." #<?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?> <span>data detail <?php echo $this->modelClass;?> pada aplikasi</span>
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
                            <?php
                            foreach($this->tableSchema->columns as $column):
                            ?>
                            <tr>
                                <th><?php echo "<?php echo \$model->getAttributeLabel('".$column->name."');?>" ;?></th>
                                <td><?php echo "<?php echo \$model->".$column->name.";?>";?></td>
                            </tr>
                            <?php
                            endforeach;
                            ?>
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
