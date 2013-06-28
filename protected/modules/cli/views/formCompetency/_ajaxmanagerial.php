<div class="row-fluid" id="detail">
    <div class="span12 widget">
        <div class="widget-header">
            <span class="title">
                <i class="icon-edit"></i> Form Detail
            </span>
        </div>
        <div class="widget-content form-container">
            <form method="POST" action="<?php echo Yii::app()->createUrl('cli/formcompetency/submitmanagerial');?>">
                <input type="hidden" name="detail[tahun]" value="<?php echo $data['tahun'];?>"/>
                <input type="hidden" name="detail[jabatan]" value="<?php echo $data['jabatan'];?>"/>
                <?php
                //print_r ($listCompetency);
                if (count($listCompetency) > 0):
                    ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama Kompetensi</th>
                                <th>rcl</th>
                                <th>itj</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0;?>
                            <?php foreach ($listCompetency as $rowCompetency): ?>  
                                <tr>
                                    <td><?php echo $rowCompetency->code; ?><input type="hidden" name="detail[competency]['<?php echo $i;?>'][id]" value="<?php echo $rowCompetency->id;?>"/></td>
                                    <td><?php echo $rowCompetency->name; ?></td>
                                    <td><input type="text" name="detail[competency]['<?php echo $i;?>'][rcl]" /></td>
                                    <td><input type="text" name="detail[competency]['<?php echo $i;?>'][itj]" /></td>
                                    <?php $i++;?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <div class="form-actions">
                        <input type="submit" class="btn btn-primary" value="Simpan Kompetensi" />
                        <input type="reset" class="btn" value="Batal" />
                    </div>
                    <?php
                else:
                    ?>
                    <div class="alert alert-block">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Perhatian!</h4>
                        Anda belum memilih kompetensi untuk ditampilkan
                    </div>
                <?php
                endif;
                ?>
            </form>
        </div>
    </div>
</div>
