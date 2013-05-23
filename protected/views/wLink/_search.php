<div class="widget-content form-container">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
        'type'=>'horizontal',
    ));
    ?>

    <?php echo $form->textFieldRow($model, 'id', array('class' => 'span5')); ?>

    <?php echo $form->textFieldRow($model, 'parent_id', array('class' => 'span5')); ?>

    <?php echo $form->textFieldRow($model, 'name', array('class' => 'span5', 'maxlength' => 45)); ?>

    <?php echo $form->textFieldRow($model, 'title', array('class' => 'span5', 'maxlength' => 100)); ?>

    <?php echo $form->textFieldRow($model, 'url', array('class' => 'span5', 'maxlength' => 200)); ?>

    <?php echo $form->textFieldRow($model, 'image', array('class' => 'span5', 'maxlength' => 200)); ?>

    <?php echo $form->textAreaRow($model, 'auth', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

    <?php echo $form->textFieldRow($model, 'w_module_id', array('class' => 'span5')); ?>

        <?php echo $form->textFieldRow($model, 'ordering', array('class' => 'span5')); ?>

    <div class="form-actions">
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'label' => 'Search',
        ));
        ?>
    </div>

<?php $this->endWidget(); ?>
</div>
