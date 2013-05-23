<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<div class="page-header">
    <?php
    echo "<?php\n";
    $label=$this->pluralize($this->class2name($this->modelClass));
    echo "\$this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            '$label',
        ),
    ));\n";
    ?>
    ?>

    <h1 id="main-heading">
        Manajemen <?php echo $label; ?> <span>pengelolaan <?php echo $this->class2name($this->modelClass); ?> pada aplikasi</span>
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
                <?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbGridView',array(
                        'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
                        'dataProvider'=>$dataProvider,
                        'type'=>'striped',
                        'template'=>'{items}{pager}',
                        'columns'=>array(
                <?php
                $count=0;
                foreach($this->tableSchema->columns as $column)
                {
                        if(++$count==7)
                                echo "\t\t/*\n";
                        echo "\t\t'".$column->name."',\n";
                }
                if($count>=7)
                        echo "\t\t*/\n";
                ?>
                        ),
                )); ?>
            </div>
        </div>
    </div>
</div>
