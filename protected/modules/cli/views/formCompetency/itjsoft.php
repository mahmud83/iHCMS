<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Form Competency' => array('index'),
            'soft',
        ),
    ));
    ?>

    <h1 id="main-heading">
        Generator Formulir Profil ITJ Soft<span>halaman untuk menggenerasi formulir itj per jabatan per tipe kompetensi per tahun</span>
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
                        //'dataProvider'=>$golongan,
                        'dataProvider'=>$jabatan->search(),
                        'filter'=>$jabatan,
                        'type'=>'striped',
                        'template'=>'{items}{pager}',
                        'columns'=>array(
                            'nama',
                            'status',
                            array(
                                'class'=>'bootstrap.widgets.TbButtonColumn',
                                'header'=>'Soft Competency',
                                'template'=>'{soft}',
                                'buttons'=>array(
                                    'soft'=>array(
                                        'icon'=>'icon-remove',
                                        'url'=>'Yii::app()->createUrl("cli/formCompetency/setItjSoft", array("id"=>$data->id))', 
                                    ),
                                ),
                            ),
                        ),
                )); ?>
            </div>
        </div>
    </div>
</div>