<div class="page-header">
    <?php
$this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Competency Categories',
        ),
    ));
    ?>

    <h1 id="main-heading">
        Manajemen Competency Categories <span>pengelolaan Competency Category pada aplikasi</span>
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
                <?php $this->widget('bootstrap.widgets.TbGridView',array(
                        'id'=>'competency-category-grid',
                        'dataProvider'=>$dataProvider,
                        'type'=>'striped',
                        'template'=>'{items}',
                        'columns'=>array(
                		'id',
		'code',
		'name',
		'description',
		'definition',
		'competency_type_id',
                        ),
                )); ?>
            </div>
        </div>
    </div>
</div>
