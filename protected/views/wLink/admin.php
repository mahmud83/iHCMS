<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('wlink-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Wlinks' => array('index'),
            'Manage',
        ),
    ));
    ?>

    <h1 id="main-heading">
        Manajemen Menu <span>pengelolaan menu pada aplikasi</span>
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

                <?php
                $this->renderPartial('_search', array(
                    'model' => $model,
                ));
                ?>

            </div>
        </div>

        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header">
                    <span class="title">
                        <i class="icon-table"></i> Daftar Data Menu
                    </span>
                </div>
                <?php
                $this->widget('bootstrap.widgets.TbGridView', array(
                    'id' => 'wlink-grid',
                    'type' => 'striped',
                    'template'=>'{items}{pager}',
                    'dataProvider' => $model->search(),
                    'filter' => $model,
                    'columns' => array(
                        'id',
                        'parent_id',
                        'name',
                        'title',
                        'url',
                        'image',
                        /*
                          'auth',
                          'w_module_id',
                          'ordering',
                         */
                        array(
                            'class' => 'bootstrap.widgets.TbButtonColumn',
                        ),
                    ),
                ));
                ?>
            </div>
        </div>
    </div>
</div>
