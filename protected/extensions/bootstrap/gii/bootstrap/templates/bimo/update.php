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
            '$label'=>array('index'),
            \$model->{$nameColumn}=>array('view','id'=>\$model->{$this->tableSchema->primaryKey}),
            'Update',
        ),
    ));\n";
    ?>
    ?>

    <h1 id="main-heading">
        Ubah Data <?php echo $this->modelClass." <?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?> <span>mengubah data <?php echo $this->modelClass;?> pada aplikasi</span>
    </h1>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header">
                    <span class="title">
                        <i class="icon-edit"></i> Form Id <?php echo " <?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?>
                    </span>
                </div>
                <?php echo "<?php echo \$this->renderPartial('_form',array('model'=>\$model)); ?>"; ?>
            </div>
        </div>
    </div>
</div>

