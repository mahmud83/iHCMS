<div class="widget-content form-container">
    <div class="alert alert-info">
        Fields with <span class="required">*</span> are required.
    </div>
    
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'wlink-form',
        'enableAjaxValidation' => true,
        'type' => 'horizontal',
    ));
    ?>

    <?php echo $form->errorSummary($model); ?>

    <?php //echo $form->textFieldRow($model, 'parent_id', array('class' => 'span5')); ?>
    
    <?php //echo $form->textFieldRow($model, 'w_module_id', array('class' => 'span5')); ?>
    
    <?php echo $form->dropDownListRow($model, 'w_module_id', CHtml::listData(WModule::model()->findAll(array('condition'=>'parent_id IS NULL')), 'id', 'title'), array('prompt'=>'silahkan pilih salah satu', 'ajax'=>array(
        'type'=>'POST', //request type
        'url'=>CController::createUrl('wLink/ajaxLink'),
        'update'=>'#WLink_parent_id',
    ))); ?>
    
    <?php echo $form->dropDownListRow($model, 'parent_id', array(), array('prompt'=>'silahkan pilih salah satu')); ?>

    <?php echo $form->textFieldRow($model, 'name', array('class' => 'span5', 'maxlength' => 45)); ?>

    <?php echo $form->textFieldRow($model, 'title', array('class' => 'span5', 'maxlength' => 100)); ?>

    <?php echo $form->textFieldRow($model, 'url', array('class' => 'span5', 'maxlength' => 200)); ?>

    <?php echo $form->textFieldRow($model, 'image', array('class' => 'span5', 'maxlength' => 200)); ?>

    <?php echo $form->textAreaRow($model, 'auth', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

    

    <?php echo $form->textFieldRow($model, 'ordering', array('class' => 'span5')); ?>

    <div class="form-actions">
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'label' => $model->isNewRecord ? 'Create' : 'Save',
        ));
        ?>
    </div>

    <?php $this->endWidget(); ?>
</div>
