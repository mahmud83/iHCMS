<div class="row-fluid no-clear">
    <div class="span12 widget">
        <div class="widget-title">
            <i class="icon-bar-chart titleicon"></i>
            <p>Aktivasi Competency Level Index</p>
        </div>
        <div class="widget-content">
            <div class="row-fluid">
                <div class="span6">
                    <?php //echo $model_tahun->name;?>
                    <?php
                    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                        'id' => 'givetask-form',
                        'type' => 'horizontal',
                        'enableAjaxValidation' => true,
                            ));
                    ?>

                    <div class="control-group">
                        <label class="control-label" for="PPerson_user_id">Jabatan</label>
                        <div class="controls">
                            <?php $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                                'name' => 'user',
                                'value' => '',
                                'sourceUrl' => $this->createUrl('/wOccupation/lookup'),
                                'options' => array(
                                    'showAnim' => 'fold',
                                    'minLength'=>'2',
                                        'select'=>'js:function( event, ui ) {  
                                            $("#CompetencyTask_w_occupation_id").val(ui.item.id);  
                                            $("#user").val(ui.item.value);  
                                            return false;  
                                        }',
                                ),
                                'htmlOptions' => array(
                                    'style' => 'height:20px; z-index: 4;'
                                ),
                                )); ?>
                                <input type="hidden" readonly="readonly" size="2" maxlength="2" name="CompetencyTask[w_occupation_id]" id="CompetencyTask_w_occupation_id">
                        </div>
                    </div>

                    <?php
                    /*
                    echo $form->dropDownListRow($competencyType, 'name', CHtml::listData(CompetencyType::model()->findAll(), 'id', 'name'), array('prompt' => 'Pilih Salah Satu', 'ajax' => array(
                        'type' => 'POST',
                        'url' => CController::createUrl('CompetencyCategory/getDynamicType'),
                        'update' => '#' . CHtml::activeId($model, 'id_aspek'),
                        'data' => array('comeptency_type_id' => 'js:this.value'),
                    )));
                    * 
                    */
                    ?>
                    <?php echo $form->checkBoxListRow($competencyCategory, 'competency_type_id', CHtml::listData(CompetencyType::model()->findAll(), 'id', 'name'), array('hint'=>'<strong>Note:</strong> Pilih kompetensi yang berlaku untuk jabatan ini.')); ?>

                    <div class="controls">
                        <?php
                        $this->widget('bootstrap.widgets.TbButton', array(
                            'buttonType' => 'submit',
                            'type' => 'primary',
                            'label' => 'Submit',
                            'ajax' => array(
                                'type' => 'POST',
                        'url' => CController::createUrl('CompetencyCategory/getDynamicType'),
                        'update' => '#' . CHtml::activeId($model, 'id_aspek'),
                        'data' => array('comeptency_type_id' => 'js:this.value'),
                            ),
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
                <div class="span6">
                    <?php //$this->renderPartial('_ajaxContent', $data, false, true);?>
                </div>
            </div>
        </div>
    </div>
</div>