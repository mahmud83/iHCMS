<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Setting' => array('index'),
            'Generator Hard',
        ),
    ));
    ?>

    <h1 id="main-heading">
        Generator Penilai Hard Competency<span>halaman untuk menggenerasi penilai per karyawan</span>
    </h1>
</div>
<div class="row-fluid">
    <div class="span12" id="request">
        <div class="row-fluid">
            <div class="span12 widget">
                <form class="form-horizontal">
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
                                    'search'  => 'js:function(){
                                        $("#loader").show();
                                        }',
                                    'open' => 'js:function(){
                                        $("#loader").hide(); 
                                        }',
                                    'select' => 'js:function( event, ui ) {  
                                        $("#userdetail_id").val(ui.item.id);  
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
                            <a class="btn btn-primary" id="submit">Pilih Karyawan</a>
                            <span class="my-loader" id="loader" style="display: none;">&nbsp;</span>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <div id="ajaxResponse">

        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {
        $("#submit").click(function() {
            ajaxLoad();
        });
        
        $("#submitPeers").live("click", function() {
            var input = $(this).parent().parent().parent().parent().serialize();
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('cli/suggest/AjaxSubmitHardPeers'); ?>",
                type: "POST",
                cache: false,
                data: input,
                beforeSend: function(xhr) {
                    $("#backdrop").show();
                },
                success: function(data) {
                    //alert(data);
                    if (data == 'success') {
                        alert('data berhasil disimpan');
                        ajaxLoad();
                    }
                    else if (data == 'error'){
                        alert('data tidak berhasil dikirim');
                    }
                    else {
                        alert(data);
                    }
                },
                error: function(request, status, error) {
                    alert(request.responseText);
                    //alert('hae 2');
                },
                complete: function() {
                    $("#backdrop").hide();
                },
            })
        });
        
        function ajaxLoad() {
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('cli/suggest/ajaxHardPeers'); ?>",
                type: "POST",
                cache: false,
                data: $('input[name="userDetail"]').serialize(),
                beforeSend: function(xhr) {
                    $("#backdrop").show();
                },
                success: function(data) {
                    if (data != 'error') {
                        $('#ajaxResponse').html('');
                        $('#ajaxResponse').append(data);
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
        }
    });
</script>
