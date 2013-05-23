<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Form Competency' => array('index'),
            'generator',
        ),
    ));
    ?>

    <h1 id="main-heading">
        Generator Formulir <span>halaman untuk menggenerasi formulir perj jabatan per tipe kompetensi per tahun</span>
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
                <div class="widget-content form-container">
                    <form class="form-horizontal" method="post">
                        <div class="control-group">
                            <label class="control-label" for="input02">Tahun Formulir</label>
                            <?php $now = date(Y); ?>
                            <div class="controls">
                                <select id="input02">
                                    <option>silahkan pilih salah satu</option>
                                    <?php for($i = $now-5; $i <= $now+5;$i++):?>
                                    <option <?php echo ($i == $now)?'selected="selected"':'';?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php endfor;?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Jabatan</label>
                            <div class="controls">
                                <input id="user_id" name="user_id" type="hidden">
                                 <?php $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                                    'name' => 'user',
                                    'value' => '',
    
                                    'sourceUrl' => yii::app()->createUrl('pim/wJabatan/ajaxlookup'),
                                    'options' => array(
                                        'showAnim' => 'fold',
                                        'minLength'=>'2',
                                        'beforeSend' => 'function(){
                                            $("#hmm").addClass("loading");}',
                                        'complete' => 'function(){
                                            $("#hmm").removeClass("loading");}',
                                        'select'=>'js:function( event, ui ) {  
                                                $("#user_id").val(ui.item.id);  
                                                $("#user").val(ui.item.value);  
                                                return false;  
                                           }',
                                        ),
                                     'htmlOptions' => array(
                                        'style' => 'height:20px;'
                                        ),
                                    )); ?><div id="hmm"></div>
                                <p class="help-block">Isian di atas adalah autocomplete, waktu loading sangat bervariasi pada kemampuan olah server</p>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="input08">Hard Competency</label>
                            <div class="controls">
                                <select multiple="multiple" id="input08" class="span10" size="15">
                                    <?php
                                    $kategori = CompetencyCategory::model()->findAll(array(
                                        'condition'=>'competency_type_id = :type',
                                        'params'=> array(':type'=>'3'),
                                        'order'=>'code ASC',
                                    ));
                                    
                                    foreach($kategori as $rowCat):
                                        echo '<option value="'.$rowCat->id.'">['.$rowCat->code.'] '.ucwords(strtolower($rowCat->name)).'</option>';
                                    endforeach;
                                    ?>
                                </select>
                                <p class="help-block">Tekan tombol Ctrl (windows) / Command (Mac) untuk memilih lebih dari satu pilihan</p>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button class="btn">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>