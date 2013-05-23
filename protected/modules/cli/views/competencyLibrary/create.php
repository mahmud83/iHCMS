<div class="page-header">
    <?php
$this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Competency Libraries'=>array('index'),
            'Create',
        ),
    ));
    ?>

    <h1 id="main-heading">
        Tambah Data CompetencyLibrary <span>menambah data CompetencyLibrary pada aplikasi</span>
    </h1>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header">
                    <span class="title">
                        <i class="icon-edit"></i> Form
                    </span>
                </div>
                <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>            </div>
        </div>
    </div>
</div>


