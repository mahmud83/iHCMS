<div class="row-fluid no-clear">
    <button class="span3 big-button medium-blue" href="<?php echo Yii::app()->controller->createUrl('setting/aktivasi'); ?>">
        <i class="icon-cogs icon-large"></i>
        <span class="button-text">Setting Jadwal Penilaian CLI</span>
    </button>

    <button class="span3 big-button medium-blue" href="<?php echo Yii::app()->controller->createUrl('setting/aktivasi'); ?>">
        <i class="icon-cogs icon-large"></i>
        <span class="button-text">Tipe Kompetensi</span>
    </button>

    <button class="span3 big-button medium-blue" href="<?php echo Yii::app()->controller->createUrl('setting/aktivasi'); ?>">
        <i class="icon-cogs icon-large"></i>
        <span class="button-text">Setting Jadwal Penilaian CLI</span>
    </button>

    <button class="span3 big-button medium-blue" href="<?php echo Yii::app()->controller->createUrl('setting/aktivasi'); ?>">
        <i class="icon-cogs icon-large"></i>
        <span class="button-text">Setting Jadwal Penilaian CLI</span>
    </button>
</div>


<div class="row-fluid no-clear">
    <div class="span12 widget">
        <div class="widget-title">
            <i class="icon-bar-chart titleicon"></i>
            <p>Aktivasi Competency Level Index</p>
        </div>
        <div class="widget-content">
            <?php //echo $model_tahun->name;?>
            <?php
            $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                'id' => 'competency-library-form',
                'type' => 'horizontal',
                'enableAjaxValidation' => true,
            ));
            ?>

            <?php echo $form->textFieldRow($model_tahun, 'tahun_cli', array('label' => 'Tahun Penilaian CLI')); ?>

                <?php echo $form->dateRangeRow($model_tanggal, 'tanggal_cli', array('hint' => 'Tekan pada kolom untuk mengisi!.', 'prepend' => '<i class="icon-calendar"></i>', 'options' => array('callback' => 'js:function(start, end){console.log(start.toString("MMMM d, yyyy") + " - " + end.toString("MMMM d, yyyy"));}'))); ?>

            <div class="controls">
                <?php
                $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType' => 'submit',
                    'type' => 'primary',
                    'label' => 'Submit',
                ));
                ?>
<?php
$this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'reset',
    'label' => 'Reset',
));
?>
            </div>

<?php $this->endWidget(); ?>
        </div>
    </div>
</div>