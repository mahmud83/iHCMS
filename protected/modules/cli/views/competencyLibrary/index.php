<div class="page-header">
    <?php
$this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Competency Libraries',
        ),
    ));
    ?>

    <h1 id="main-heading">
        Manajemen Competency Libraries <span>pengelolaan Competency Library pada aplikasi</span>
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
                        'id'=>'competency-library-grid',
                        'dataProvider'=>$dataProvider,
                        'type'=>'striped',
                        'template'=>'{items}',
                        'columns'=>array(
                		'id',
		'category',
		'code',
		'dimension',
		'name',
		'definition',
		/*
		'level_1',
		'level_2',
		'level_3',
		'level_4',
		'level_5',
		'date',
		'active',
		*/
                        ),
                )); ?>
            </div>
        </div>
    </div>
</div>
