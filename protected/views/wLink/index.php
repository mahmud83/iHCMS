<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Wlinks',
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
                <div class="widget-header">
                    <span class="title">
                        <i class="icon-table"></i> Daftar Data Modul
                    </span>
                </div>
                <?php
                $this->widget('bootstrap.widgets.TbGridView', array(
                    'id' => 'wlink-grid',
                    'type'=>'striped',
                    'dataProvider' => $dataProvider,
                    'template' => "{items}",
                    'columns' => array(
                        'parent_id',
                        'name',
                        'title',
                        'url',
                        'image',
                        'ordering',
                    /*
                      'auth',
                      'w_module_id',
                      'order',
                     */
                    ),
                ));
                ?>
            </div>
        </div>
    </div>
</div>
