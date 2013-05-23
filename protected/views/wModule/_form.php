<?php
/* @var $this WModuleController */
/* @var $model WModule */
/* @var $form CActiveForm */
?>

<div class="widget-content form-container">
    <?php
    /** @var BootActiveForm $form */
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'horizontalForm',
        'type' => 'horizontal',
    ));

    echo $form->textFieldRow($model, 'parent_id', array('class' => 'span12'));

    echo $form->textFieldRow($model, 'name', array('class' => 'span12'));

    echo $form->textFieldRow($model, 'title', array('class' => 'span12'));

    echo $form->textFieldRow($model, 'description', array('class' => 'span12'));

    echo $form->textFieldRow($model, 'url', array('class' => 'span12'));

    echo $form->textFieldRow($model, 'image', array('class' => 'span12'));
    ?>

    <div class="form-actions">
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'type' => 'primary', 'label' => 'Submit')); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'reset', 'label' => 'Reset')); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>