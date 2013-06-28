<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Form Competency' => $this->module->id,
            'soft',
        ),
    ));
    ?>

    <h1 id="main-heading">
        Competency Level Index <span><?php echo $this->uniqueId . '/' . $this->action->id; ?></span>
    </h1>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-content">
                    
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/animasi.gif" alt="PTPN 5">
                </div>

            </div>
        </div>
    </div>
</div>