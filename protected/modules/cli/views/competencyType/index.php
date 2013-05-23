<div class="page-header">
    <?php
$this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Competency Types',
        ),
    ));
    ?>

    <h1 id="main-heading">
        Manajemen Competency Types <span>pengelolaan Competency Type pada aplikasi</span>
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
                        'id'=>'competency-type-grid',
                        'dataProvider'=>$dataProvider,
                        'type'=>'striped',
                        'template'=>'{items}',
                        'columns'=>array(
                		'id',
		'name',
                        ),
                )); ?>
            </div>
        </div>
    </div>
</div>
