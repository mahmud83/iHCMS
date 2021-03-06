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
        Generator Formulir <span>halaman untuk menggenerasi formulir per golongan per tipe kompetensi per tahun</span>
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
                                <select id="input02" name="setsoft[tahun]">
                                    <option>silahkan pilih salah satu</option>
                                    <?php for ($i = $now - 5; $i <= $now + 5; $i++): ?>
                                        <option <?php echo ($i == $now) ? 'selected="selected"' : ''; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Golongan</label>
                            <div class="controls">
                                <input type="text" name="golongan" value="<?php echo $golongan->nama; ?>" readonly="readonly" />
                                <input type="hidden" name="setsoft[golongan]" value="<?php echo $golongan->id; ?>" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="pilihanInput">Pilihan Input Kompetensi</label>
                            <div class="controls">
                                <label class="radio"><input type="radio" name="setsoft[input]" class="uniform pilihanInput" value="1" /> Salin kompetensi dari tahun sebelum nya</label>
                                <label class="radio"><input type="radio" name="setsoft[input]" class="uniform pilihanInput" value="2" /> Salin kompetensi dari golongan lain</label>
                                <label class="radio"><input type="radio" name="setsoft[input]" class="uniform pilihanInput" value="3" /> Pilih kompetensi manual</label>
                            </div>
                            <script type="text/javascript">
                                $(function() {
                                    $("#tahunKompetensi").hide();
                                    $("#golongan").hide();
                                    $("#kompetensi").hide();

                                    $('input:radio[name=setsoft[input]]').click(function() {
                                        var n = $(this).val();
                                        $("#tahunKompetensi").hide();
                                        $("#golongan").hide();
                                        $("#kompetensi").hide();
                                        //alert(n);
                                        if (n == 1) {
                                            $("#tahunKompetensi").show();
                                        }
                                        if (n == 2) {
                                            $("#golongan").show();
                                        }
                                        if (n == 3) {
                                            $("#kompetensi").show();
                                        }
                                    });
                                });
                            </script>
                        </div>

                        <div class="control-group" id="tahunKompetensi">
                            <label class="control-label" for="setsoft[tahunkompetensi]">Tahun Kompetensi</label>
                            <div class="controls">
                                <select name="setsoft[tahunkompetensi]">
                                    <option>Silahkan pilih salah satu</option>
                                    <?php
                                    $tahunPilih = CompetencyTask::model()->findAll(array(
                                        'condition' => 'golongan = :golongan',
                                        'params' => array(':golongan' => $golongan->id),
                                        'group' => 'tahun',
                                    ));

                                    if (count($tahunPilih) > 0):
                                        foreach ($tahunPilih as $rowTahun):
                                            echo '<option value="' . $rowTahun->tahun . '">' . $rowTahun->tahun . '</option>';
                                        endforeach;
                                    endif;
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group" id="golongan">
                            <label class="control-label" for="setsoft[golonganlain]">Golongan</label>
                            <div class="controls">
                                <select name="setsoft[golonganlain]">
                                    <option>Silahkan pilih salah satu</option>
                                    <?php
                                    $listGolongan = WGolongan::model()->findAll();

                                    if (count($listGolongan) > 0):
                                        foreach ($listGolongan as $rowGolongan):
                                            echo '<option value="' . $rowGolongan->id . '">' . $rowGolongan->nama . '</option>';
                                        endforeach;
                                    endif;
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group" id="kompetensi">
                            <label class="control-label" for="setsoft[kompetensi]">Hard Competency</label>
                            <div class="controls">
                                <select multiple="multiple" size="10" name="setsoft[kompetensi][]" class='demo1 span12'>
                                    <?php
                                    $kategori = CompetencyCategory::model()->findAll(array(
                                        'condition' => 'competency_type_id = :type',
                                        'params' => array(':type' => '1'),
                                        'order' => 'code ASC',
                                    ));

                                    foreach ($kategori as $rowCat):
                                        echo '<option value="' . $rowCat->id . '">[' . $rowCat->code . '] ' . ucwords(strtolower($rowCat->name)) . '</option>';
                                    endforeach;
                                    ?>
                                </select>
                                <script type="text/javascript">
                                    $(function() {
                                        $('.demo1').bootstrapDualListbox({
                                            preserveselectiononmove: 'moved',
                                            moveonselect: false,
                                            selectorminimalheight: 200,
                                        });
                                    });
                                </script>
                                <p class="help-block">Tekan tombol Ctrl (windows) / Command (Mac) untuk memilih lebih dari satu pilihan</p>
                            </div>
                        </div>

                        <div class="form-actions">
                            <?php echo CHtml::ajaxButton ("Update data",
                                    CController::createUrl('formCompetency/ajaxSoft'), 
                                    array(
                                        'type'=>'POST',
                                        'update' => '#detail',
                                        ),
                                    array('class'=>'btn btn-primary'));
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php $this->renderPartial('_ajaxsoft', array('data' => $data, 'listCompetency' => $listCompetency)); ?>
    </div>
</div>