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
        Generator Formulir Profil Manajerial<span>halaman untuk menggenerasi formulir per jabatan per tipe kompetensi per tahun</span>
    </h1>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header">
                    <span class="title">
                        <i class="icon-table"></i> Daftar Data Profil Jabatan Tahun 2013
                    </span>
                </div>
                <?php
                $this->widget('bootstrap.widgets.TbGridView', array(
                    'id' => 'dashboard-grid',
                    'dataProvider' => $jabatan,
                    'type' => 'striped',
                    'template' => '{items}{pager}',
                    'columns' => array(
                        'nama',
                        //'status',
                        array(
                            'header'=>'Status',
                            'name'=>'status',
                            'value'=>'$data->getStatus()',
                        ),
                        array(
                            'class' => 'bootstrap.widgets.TbButtonColumn',
                            'header' => 'Setting',
                            'template' => '{managerial}',
                            'buttons' => array(
                                'managerial' => array(
                                    'icon' => 'icon-cogs',
                                    'url' => 'Yii::app()->createUrl("cli/formCompetency/setManagerial", array("id"=>$data->id))',
                                ),
                            ),
                        ),
                    ),
                ));
                ?>
            </div>
        </div>
    </div>
</div>