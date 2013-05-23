<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
?>

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('<?php echo $this->class2id($this->modelClass); ?>-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="page-header">
    <?php
    echo "<?php\n";
    $label=$this->pluralize($this->class2name($this->modelClass));
    echo "\$this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            '$label'=>array('index'),
            'Manage',
        ),
    ));\n";
    ?>
    ?>

    <h1 id="main-heading">
        Manajemen <?php echo $this->pluralize($this->class2name($this->modelClass)); ?> <span>pengelolaan <?php echo $this->class2name($this->modelClass);?> pada aplikasi</span>
    </h1>
</div>
<div class="row-fluid">
    <div class="span12">

        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-content clearfix">
                    <h4>Informasi</h4>
                    <blockquote>
                        <p>Anda dapat memilih memasukkan operator pembanding (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
                            atau <b>=</b>) pada awal setiap nilai pencarian Anda untuk menentukan bagaimana perbandingan harus dilakukan</p>
                    </blockquote>
                </div>
                <div class="form-actions">
                    <button class="btn search-button">Pencarian Lanjutan</button>
                </div>
            </div>
        </div>

        <div class="row-fluid search-form" style="display:none">
            <div class="span12 widget">
                <div class="widget-header">
                    <span class="title"><i class="icon-resize-horizontal"></i> Form Pencarian Lanjutan</span>
                </div>

                <?php echo "<?php \$this->renderPartial('_search',array(
                        'model'=>\$model,
                )); ?>\n"; ?>

            </div>
        </div>

        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header">
                    <span class="title">
                        <i class="icon-table"></i> Daftar Data Menu
                    </span>
                </div>
                <?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbGridView',array(
                        'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
                        'dataProvider'=>$model->search(),
                        'type'=>'striped',
                        'filter'=>$model,
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
                                array(
                                        'class'=>'bootstrap.widgets.TbButtonColumn',
                                ),
                        ),
                )); ?>
            </div>
        </div>
    </div>
</div>