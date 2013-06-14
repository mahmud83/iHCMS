<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Statistik' => array('stats'),
            'Dashboard',
        ),
    ));
    ?>

    <h1 id="main-heading">
        Pengukuran Individu Soft tahun 2013<span>pengukuran kompetensi berdasar tahun pengukuran</span>
    </h1>
</div>

<div class="row-fluid">
    <div class="span12" id="request">
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header"><span class="title">Kompetensi Soft</span></div>
                <div class="widget-content form-container">
                    <form id="wizard_soft" class="form-horizontal form-step-soft" >
                        <?php
                        $i = 1;
                        foreach ($competency as $row):
                            ?>
                            <fieldset title="<?php echo $row->code . ' : ' . $row->name; ?>" step="<?php echo $row->id; ?>">
                                <legend><i class="icon-book"></i> <?php echo $row->category0->code . ' : ' . $row->category0->name; ?></legend>
                                <table class="table table-striped table-detail-view">
                                    <tr>
                                        <th>Kode</th>
                                        <td><?php echo $row->code; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td><?php echo $row->name; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <td><?php echo $row->category0->description; ?></td>
                                    </tr>
                                </table>
                                <div class="control-group">
                                    <label class="control-label">Evidence</label>
                                    <div class="controls">
                                        <?php
                                        $data = CompetencyResult::model()->find(array(
                                            'condition' => 'assessor_id = :assessor AND assessed_id = :assessed AND competency_library_id = :library AND competency_id = :compActive',
                                            'params' => array(
                                                ':assessor' => Yii::app()->user->getId(),
                                                ':assessed' => Yii::app()->user->getId(),
                                                ':library' => $row->id,
                                                ':compActive' => $cli->id,
                                            ),
                                        ));
                                        ?>
                                        <textarea class="span12" name="soft[evidence][<?php echo $row->id; ?>]" <?php echo (count($data) > 0) ? 'disabled' : ''; ?> ><?php echo (count($data) > 0) ? $data->evidence : ''; ?></textarea>
                                    </div>
                                </div>
                            </fieldset>
                            <?php
                        endforeach;
                        ?>
                        <fieldset title="Penutup">
                            <legend><i class="icon-book"></i> Penutup</legend>
                            <div class="form-actions">
                                <a class="btn btn-primary" href="<?php echo Yii::app()->createUrl('cli/test/softnext');?>">Menuju Tahap Selanjutnya</a>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/stepprogress/stepprogress.css" rel="stylesheet">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/stepprogress/stepprogress.js"></script>
<script text="text/javascript">

    $(function() {
        var softContainer = $('.form-step-soft'),
                length = softContainer.children('fieldset').length;

        // STEP PROGRESSBAR
        softContainer.find('fieldset').hide().eq(0).show().addClass('active');
        softContainer.prepend('<div class="progressbox"></div>');
        softContainer.children('.progressbox').append('<div class="progress progress-info"><div class="bar"></div></div>');

        // STEP TITLE 
        var title = softContainer.find('fieldset.active').attr('title');
        desc = softContainer.find('fieldset.active').children('legend').text();

        softContainer.prepend('<div class="title"><h4>' + title + '</h4><p class="description">' + desc + '</div></div>');

        progressStepSoft();

        // STEP BUTTON
        softContainer.append('<div class="buttonpane"></div>');
        //var step = softContainer.find('fieldset.active').attr('step');
        softContainer.find('.buttonpane').append('<a href="javascript:void(0)" class="btn btn-small next" >SELANJUTNYA</a>');
        //softContainer.find('.buttonpane').prepend('<a href="javascript:void(0)" class="btn btn-small prev">PREV</a>');

        // INITIALIZATION
        //if (softContainer.find('fieldset').eq(0).hasClass('active')) {
        // softContainer.find('.buttonpane').children('a.prev').hide();
        //} else {
        //  softContainer.find('.buttonpane').children('a.prev').show();
        //}

        // FUNCTION STEP
        function formStepSoft(id) {
            var active = softContainer.find('fieldset.active'),
                    length = softContainer.children('fieldset').length;
            index = active.index();
            if (id == 'next') {
                softContainer.find('fieldset').hide().removeClass('active');
                active.next('fieldset').addClass('active').show();
                progressStepSoft();
                if (index == length) {
                    //softContainer.find('.buttonpane').children('a.prev').show();
                    softContainer.find('.buttonpane').children('a.next').hide();
                    softContainer.find('.buttonpane').append('<button type="submit" class="btn btn-primary btn-small">Submit</button>');
                }
            } else {
                softContainer.find('.buttonpane').children('button').hide();
                softContainer.find('.buttonpane').children('a.next').show();

                softContainer.find('fieldset').hide().removeClass('active');
                active.prev('fieldset').addClass('active').show();
                progressStep();
                if (index == 1) {
                    softContainer.find('.buttonpane').children('a.next').show();
                    //softContainer.find('.buttonpane').children('a.prev').hide();
                }
            }
        }

        $(softContainer.find('a.next')).click(function() {
            var textarea = $('fieldset.active').find('textarea');
            if (!$.trim(textarea.val())) {
                alert('data masih kosong');
                $('fieldset.active').find('.control-group').addClass('error');
                $('fieldset.active').find('textarea').after('<p class="help-block">* Maaf data evidence harus di isi</p>');
                //return false;
            }
            else {
                $('.control-group').removeClass('error');
                $('.help-inline').remove();

                //ajax input
                //alert(textarea);
                if (textarea.serialize() != '') {
                    $.ajax({
                        url: "<?php echo Yii::app()->createUrl('cli/test/ajaxSoftSatu'); ?>",
                        type: "post",
                        cache: false,
                        data: textarea.serialize(),
                        beforeSend: function(xhr) {
                            $("#backdrop").show();
                        },
                        success: function(hasil) {
                            //$('#last-step').after(hasil);
                            if (hasil == 'success') {
                                formStepSoft('next');
                            }
                            else {
                                alert(hasil);
                                //alert("Data gagal dimasukkan. Silakan coba lagi");
                            }
                        },
                        error: function(request, status, error) {
                            alert(request.responseText);
                            //alert('hae 2');
                        },
                        complete: function() {
                            $("#backdrop").hide();
                        },
                    });
                }
                else {
                    formStepSoft('next');
                }
            }
        });
        //$(softContainer.find('a.prev')).click(function() {
        //  formStepSoft('prev');
        //});


        function progressStepSoft() {
            var activeBar = parseInt(softContainer.find('fieldset.active').index()) - 1,
                    length = parseInt(softContainer.children('fieldset').length),
                    percent = (parseInt(activeBar) / parseInt(length)) * 100;

            softContainer.find('.progressbox .progress .bar').css('width', percent + '%');
            if (percent == 100) {
                softContainer.find('.progressbox .progress').removeClass('progress-info').addClass('progress-success');
            } else {
                softContainer.find('.progressbox .progress').removeClass('progress-success').addClass('progress-info');
            }
            //alert(percent);

            var title = softContainer.find('fieldset.active').attr('title'),
                    desc = softContainer.find('fieldset.active').children('legend').text();

            softContainer.find('.title h4').text(title).next('.description').text(desc);

            //if (softContainer.find('fieldset').eq(0).hasClass('active')) {
            //  softContainer.find('.buttonpane').children('a.prev').hide();
            //} else {
            //  softContainer.find('.buttonpane').children('a.prev').show();
            //}
        }
    });
</script>