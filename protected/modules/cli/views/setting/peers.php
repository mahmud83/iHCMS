<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Form Competency' => array('index'),
            'soft',
        ),
    ));
    ?>

    <h1 id="main-heading">
        Input Menilai Soft Competency<span>halaman untuk menginput data penilai per karyawan</span>
    </h1>
</div>
<form class="form-horizontal">
    <div class="row-fluid">
        <div class="span12" id="request">
            <div class="row-fluid">
                <div class="span12 widget">

                    <div class="control-group">
                        <label class="control-label">Nama Pegawai</label>
                        <div class="controls">
                            <?php
                            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                                'name' => 'user',
                                'value' => '',
                                'sourceUrl' => Yii::app()->createUrl('pim/wuser/ajaxlookup'),
                                'options' => array(
                                    'showAnim' => 'fold',
                                    'minLength' => '2',
                                    'search' => 'js:function(){
                                        $("#loader").show();
                                        }',
                                    'open' => 'js:function(){
                                        $("#loader").hide(); 
                                        }',
                                    'select' => 'js:function( event, ui ) {  
                                        $("#userdetail_id").val(ui.item.id_user);  
                                        $("#user").val(ui.item.value);  
                                        return false;
                                   }',
                                ),
                                'htmlOptions' => array(
                                    'style' => 'height:20px; z-index: 4;'
                                ),
                            ));
                            ?>
                            <input type="hidden" readonly="readonly" size="2" maxlength="2" name="userDetail" id="userdetail_id">
                            <a class="btn btn-primary" id="submitKaryawan">Pilih Karyawan</a>
                            <span class="my-loader" id="loader" style="display: none;">&nbsp;</span>
                        </div>
                    </div>


                </div>
            </div>
            <div id="response" style="display:none;">
                <div class="row-fluid">
                    <div class="span12 widget">
                        <div class="widget-header">
                            <span class="title">
                                <i class="icon-table"></i> Detail Karyawan
                            </span>
                        </div>

                        <table class="table table-striped table-detail-view">
                            <thead>
                                <tr>
                                    <th colspan="2"><i class="icon-info-sign"></i> Detail Karyawan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Nik</th>
                                    <td id="detail_nik"></td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td id="detail_nama"></td>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <td id="detail_jab"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="span12 widget">
                        <div class="widget-header">
                            <span class="title">
                                <i class="icon-table"></i> Daftar Menilai Soft
                            </span>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama Pegawai</label>
                            <div class="controls">
                                <?php
                                $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                                    'name' => 'penilai',
                                    'id'=> 'penilaiSoft',
                                    'value' => '',
                                    'sourceUrl' => Yii::app()->createUrl('pim/wuser/ajaxlookup'),
                                    'options' => array(
                                        'showAnim' => 'fold',
                                        'minLength' => '2',
                                        'search' => 'js:function(){
                                        $("#loaderPenilaiSoft").show();
                                        }',
                                        'open' => 'js:function(){
                                        $("#loaderPenilaiSoft").hide(); 
                                        }',
                                        'select' => 'js:function( event, ui ) {  
                                        $("#penilai_idSoft").val(ui.item.id);  
                                        $("#penilaiSoft").val(ui.item.value);  
                                        return false;
                                   }',
                                    ),
                                    'htmlOptions' => array(
                                        'style' => 'height:20px; z-index: 4;'
                                    ),
                                ));
                                ?>
                                <input type="hidden" readonly="readonly" size="2" maxlength="2" name="penilaiId" id="penilai_idSoft">
                                <a class="btn btn-primary submitPenilai" for="soft">Pilih Penilai</a>
                                <span class="my-loader" id="loaderPenilaiSoft" style="display: none;">&nbsp;</span>
                            </div>
                        </div>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nik</th>
                                    <th>Jabatan</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody id="softData">
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="row-fluid">
                    <div class="span12 widget">
                        <div class="widget-header">
                            <span class="title">
                                <i class="icon-table"></i> Daftar Menilai Hard
                            </span>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama Pegawai</label>
                            <div class="controls">
                                <?php
                                $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                                    'name' => 'penilai',
                                    'id'=> 'penilaiHard',
                                    'value' => '',
                                    'sourceUrl' => Yii::app()->createUrl('pim/wuser/ajaxlookup'),
                                    'options' => array(
                                        'showAnim' => 'fold',
                                        'minLength' => '2',
                                        'search' => 'js:function(){
                                        $("#loaderPenilaiHard").show();
                                        }',
                                        'open' => 'js:function(){
                                        $("#loaderPenilaiHard").hide(); 
                                        }',
                                        'select' => 'js:function( event, ui ) {  
                                        $("#penilai_idHard").val(ui.item.id);  
                                        $("#penilaiHard").val(ui.item.value);  
                                        return false;
                                   }',
                                    ),
                                    'htmlOptions' => array(
                                        'style' => 'height:20px; z-index: 4;'
                                    ),
                                ));
                                ?>
                                <input type="hidden" readonly="readonly" size="2" maxlength="2" name="penilaiId" id="penilai_idHard">
                                <a class="btn btn-primary submitPenilai" for="hard">Pilih Penilai</a>
                                <span class="my-loader" id="loaderPenilaiHard" style="display: none;">&nbsp;</span>
                            </div>
                        </div>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nik</th>
                                    <th>Jabatan</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody id="hardData">
                            </tbody>
                        </table>
                    </div>
                </div>



                <div class="row-fluid">
                    <div class="span12 widget">
                        <div class="form-actions">
                            <button class="btn btn-primary" type="submit" id="submitPeers" onClick="return false;">Simpan Data</button>
                            <button class="btn" onClick="return false;">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
                                $(function() {
                                    $("#submitKaryawan").click(function() {
                                        $.ajax({
                                            url: "<?php echo Yii::app()->createUrl('cli/setting/ajaxSoftPeers'); ?>",
                                            type: "POST",
                                            cache: false,
                                            data: $('input[name="userDetail"]').serialize(),
                                            dataType: 'json',
                                            beforeSend: function(xhr) {
                                                $("#backdrop").show();
                                                if ($('#response').is(":visible")) {
                                                    $('#response').hide('slide', {direction: 'up'}, 1000);
                                                }
                                            },
                                            success: function(data) {
                                                if (data.message != 'error') {
                                                    //$('#ajaxResponse').html('');
                                                    //$('#ajaxResponse').append(data);
                                                    $('#response').show('slide', {direction: 'up'}, 1000);
                                                    //var rows = ('#softData tr').length + 1;
                                                    //$.each(data.userSoft, function(m) { 
                                                        //$('#softData').append('<tr><td>' + rows + '</td><td>' + m.nama + '</td><td>' + m.nik + '</td><td>' + m.jabatan + '</td><td><input type="hidden" name="penilaisoft[]" value="' + m.nik + '"/> <a onClick="return false;" class="delete" for="' + m.nik + '"><i class="icon-remove"></i></a></td></tr>'); 
                                                    //});
                                                    $('#detail_nik').html(data.detail_nik);
                                                    $('#detail_nama').html(data.detail_nama);
                                                    $('#detail_jab').html(data.detail_jab);
                                                    $('#user_id').val($('#userdetail_id').val());
                                                }
                                                else {
                                                    alert('permintaan gagal di proses');
                                                }
                                            },
                                            error: function(request, status, error) {
                                                alert(request.responseText);
                                            },
                                            complete: function() {
                                                $("#backdrop").hide();
                                            }
                                        });
                                    });

                                    $(".submitPenilai").click(function() {
                                        var parent = $(this).parent();
                                        var competency = $(this).attr('for');
                                        $.ajax({
                                            url: "<?php echo Yii::app()->createUrl('cli/setting/ajaxDetailKaryawan'); ?>",
                                            type: "POST",
                                            cache: false,
                                            data: parent.find('input[name="penilaiId"]').serialize(),
                                            dataType: 'json',
                                            beforeSend: function(xhr) {
                                                $("#backdrop").show();
                                            },
                                            success: function(data) {
                                                if (data.message != 'error') {
                                                    var rows = parent.parent().parent().find('tbody tr').length + 1;
                                                    parent.parent().parent().find('tbody').append('<tr><td>' + rows + '</td><td>' + data.detail_nama + '</td><td>' + data.detail_nik + '</td><td>' + data.detail_jab + '</td><td><input type="hidden" name="penilai'+competency+'[]" value="' + data.user_id + '"/> <a onClick="return false;" class="delete" for="' + data.user_id + '"><i class="icon-remove"></i></a></td></tr>');
                                                    parent.find('input[name="penilai"]').val('');
                                                    parent.find('input[name="penilaiId"]').val('');
                                                }
                                                else {
                                                    alert('permintaan gagal di proses');
                                                }
                                            },
                                            error: function(request, status, error) {
                                                alert(request.responseText);
                                            },
                                            complete: function() {
                                                $("#backdrop").hide();
                                            }
                                        });
                                    });

                                    $('.delete').live('click', function() {
                                        var idUser = $(this).attr('for');
                                        $(this).parent().parent().remove();
                                    });

                                    $("#submitPeers").live("click", function() {
                                        var input = $(this).parent().parent().parent().parent().parent().parent().parent().serialize();
                                        alert(input);
                                        $.ajax({
                                            url: "<?php echo Yii::app()->createUrl('cli/setting/ajaxSubmitPeers'); ?>",
                                            type: "POST",
                                            cache: false,
                                            data: input,
                                            dataType: 'json',
                                            beforeSend: function(xhr) {
                                                $("#backdrop").show();
                                            },
                                            success: function(data) {
                                                if (data.message != 'error') {
                                                    alert('data berhasil di input');
                                                }
                                                else {
                                                    alert('permintaan gagal di proses');
                                                }
                                            },
                                            error: function(request, status, error) {
                                                alert(request.responseText);
                                            },
                                            complete: function() {
                                                $("#backdrop").hide();
                                            }
                                        });

                                    });
                                });
</script>
