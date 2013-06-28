<div class="widget-content form-container">
    <div class="alert alert-info">
        Kotak isian dengan tanda <span class="required">*</span> wajib diisi.
    </div>
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'competency-library-form',
        'enableAjaxValidation' => false,
        'type' => 'horizontal',
    ));
    ?>

    <?php echo $form->errorSummary($model); ?>

    <?php //echo $form->textFieldRow($model,'category',array('class'=>'span5'));  ?>
    <?php //echo $form->dropDownListRow($model, 'category', CHtml::listData(CompetencyCategory::model()->findAll(), 'id', 'code'), array('prompt' => 'silakan pilih salah satu', 'class' => 'span5 select2')); ?>
    <div class="control-group">
        <label class="control-label" for="CompetencyLibrary_category">Category</label>
        <div class="controls">
            <?php $category = CompetencyCategory::model()->findAll(); ?>
            <select name="CompetencyLibrary[category]" class="span5 select2" id="CompetencyLibrary_category">
                <option>silakan pilih salah satu</option>
                <?php foreach ($category as $rowCat): ?>
                    <option value="<?php echo $rowCat->id; ?>"><?php echo '[' . $rowCat->code . '] ' . $rowCat->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

    <?php echo $form->textFieldRow($model, 'code', array('class' => 'span5', 'maxlength' => 45)); ?>

    <?php echo $form->textFieldRow($model, 'dimension', array('class' => 'span5', 'maxlength' => 45)); ?>

    <?php echo $form->textFieldRow($model, 'name', array('class' => 'span5', 'maxlength' => 100)); ?>

    <?php echo $form->textAreaRow($model, 'definition', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

    <?php echo $form->textAreaRow($model, 'level_1', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

    <?php echo $form->textAreaRow($model, 'level_2', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

    <?php echo $form->textAreaRow($model, 'level_3', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

    <?php echo $form->textAreaRow($model, 'level_4', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

    <?php echo $form->textAreaRow($model, 'level_5', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

    <?php echo $form->textFieldRow($model, 'date', array('class' => 'span5')); ?>

    <?php echo $form->textFieldRow($model, 'active', array('class' => 'span5', 'maxlength' => 1)); ?>

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