<?php
/* @var $this WModuleController */
/* @var $model WModule */
/* @var $form CActiveForm */
?>


<div class="widget-content form-container">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
        'htmlOptions' => array('class' => 'form-horizontal'),
    ));
    ?>
    <div class="control-group">
        <?php echo $form->label($model, 'id', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'id', array('class' => 'span12')); ?>
        </div>
    </div>

    <div class="control-group">
        <?php echo $form->label($model, 'parent_id', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'parent_id', array('class' => 'span12')); ?>
        </div>
    </div>

    <div class="control-group">
        <?php echo $form->label($model, 'name', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'name', array('class' => 'span12', 'maxlength' => 45)); ?>
        </div>
    </div>

    <div class="control-group">
        <?php echo $form->label($model, 'title', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'title', array('class' => 'span12', 'maxlength' => 100)); ?>
        </div>
    </div>

    <div class="control-group">
        <?php echo $form->label($model, 'description', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'description', array('class' => 'span12', 'maxlength' => 200)); ?>
        </div>
    </div>

    <div class="control-group">
        <?php echo $form->label($model, 'url', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'url', array('class' => 'span12', 'maxlength' => 255)); ?>
        </div>
    </div>

    <div class="control-group">
        <?php echo $form->label($model, 'image', array('class' => 'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'image', array('class' => 'span12', 'maxlength' => 200)); ?>
        </div>
    </div>

    <div class="form-actions">
        <?php echo CHtml::submitButton('Search', array('class'=>'btn')); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>
