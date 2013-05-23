<div class="page-header">
    <?php
$this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Competency Libraries'=>array('index'),
            $model->name=>array('view','id'=>$model->id),
            'Update',
        ),
    ));
    ?>

    <h1 id="main-heading">
        Ubah Data CompetencyLibrary <?php echo $model->id; ?> <span>mengubah data CompetencyLibrary pada aplikasi</span>
    </h1>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header">
                    <span class="title">
                        <i class="icon-edit"></i> Form Id  <?php echo $model->id; ?>                    </span>
                </div>
                <?php echo $this->renderPartial('_form',array('model'=>$model)); ?>            </div>
        </div>
    </div>
</div>

