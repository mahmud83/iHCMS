<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Wpreferences',
        ),
    ));
    ?>

    <h1 id="main-heading">
        Manajemen Wpreferences <span>pengelolaan Wpreference pada aplikasi</span>
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
                <?php
                $this->widget('bootstrap.widgets.TbGridView', array(
                    'id' => 'wpreference-grid',
                    'dataProvider' => $dataProvider,
                    'template' => '{items}',
                    'type' => 'striped',
                    'columns' => array(
                        'id',
                        'id_module',
                        'name',
                        'value',
                    ),
                ));
                ?>
            </div>
        </div>
    </div>
</div>
