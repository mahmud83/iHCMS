<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Form Competency' => array('index'),
            'generator',
        ),
    ));
    ?>

    <h1 id="main-heading">
        Generator Formulir <span>halaman untuk menggenerasi formulir perj jabatan per tipe kompetensi per tahun</span>
    </h1>
</div>
<div class="row-fluid">
    <div class="span12">

        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header">
                    <span class="title">
                        <i class="icon-table"></i> Daftar Data Menu
                    </span>
                </div>
                <?php $this->widget('bootstrap.widgets.TbGridView',array(
                        'id'=>'dashboard-grid',
                        'dataProvider'=>$model->search(),
                        'type'=>'striped',
                        'template'=>'{items}{pager}',
                        'columns'=>array(
                            'nama',
                            'status',
                            array(
                                'header'=>'unit',
                                'value'=>'$data->namaUnit()',
                            ),
                        ),
                )); ?>
            </div>
        </div>
    </div>
</div>