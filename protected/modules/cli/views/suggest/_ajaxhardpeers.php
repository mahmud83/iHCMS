<form id="yes">
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
                        <td>
                            <?php echo $userDetail->nik; ?>
                            <input type="hidden" name="assessed" value="<?php echo $userDetail->id_user; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td><?php echo $userDetail->nama; ?></td>
                    </tr>
                    <tr>
                        <th>Jabatan</th>
                        <td>
                            <?php
                            $jabatan = WJabatan::model()->find('id = :jabatan', array(':jabatan' => $jabatanUser));
                            echo $jabatan->nama;
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span12 widget">
            <div class="widget-header">
                <span class="title">
                    <i class="icon-table"></i> Daftar Atasan
                </span>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Status</th>
                        <th>Nama</th>
                        <th>Nik</th>
                        <th>Jabatan</th>
                        <th>Menilai</th>
                    </tr>
                </thead>
                <?php
                if (isset($atasan)):
                    ?>
                    <tbody>
                        <?php foreach($atasan as $rowAtasan): ?>
                        <tr>
                            <td>
                                <input type="checkbox" name="dinilai[<?php echo $rowAtasan['detail']->id_user; ?>]" onclick="return false" checked="checked" value="top"/>
                            </td>
                            <td><?php echo $rowAtasan['status'];?></td>
                            <td><?php echo $rowAtasan['detail']->nama; ?></td>
                            <td><?php echo $rowAtasan['detail']->nik; ?></td>
                            <td>
                                <?php
                                $jabatan = WJabatan::model()->find('id = :jabatan', array(':jabatan' => $rowAtasan['detail']->id_jabatan));
                                echo $jabatan->nama;
                                ?>
                            </td>
                            <td></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <?php
                endif;
                ?>
            </table>

        </div>
    </div>
<?php
/*
    <div class="row-fluid">
        <div class="span12 widget">
            <div class="widget-header">
                <span class="title">
                    <i class="icon-table"></i> Daftar Bawahan
                </span>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Status</th>
                        <th>Nama</th>
                        <th>Nik</th>
                        <th>Jabatan</th>
                        <th>Menilai</th>
                    </tr>
                </thead>
                <?php if (isset($bawahan)):?>
                <tbody>
                    <?php foreach ($bawahan as $rowBawahan): ?>
                        <tr>
                            <td>
                                <?php
                                $menilai = CompetencyPeers::model()->find(array(
                                    'condition' => 'year = :year AND assessor = :assessor AND assessed = :assessed',
                                    'params' => array(':year' => 2013, ':assessor' => $rowBawahan['detail']->id_user, ':assessed' => $userDetail->id_user),
                                ));
                                if (count($menilai) > 0):
                                    echo '<input type="checkbox" name="dinilai[' . $rowBawahan['detail']->id_user . ']" value="peer" checked="checked"/>';

                                else:
                                    echo '<input type="checkbox" name="dinilai[' . $rowBawahan['detail']->id_user . ']" value="peer"/>';
                                endif;
                                ?>

                            </td>
                            <td><?php echo $rowBawahan['status'];?></td>
                            <td><?php echo $rowBawahan['detail']->nama; ?></td>
                            <td><?php echo $rowBawahan['detail']->nik; ?></td>
                            <td>
                                <?php
                                $jabatan = WJabatan::model()->find('id = :jabatan', array(':jabatan' => $rowBawahan['detail']->id_jabatan));
                                echo $jabatan->nama;
                                ?>
                            </td>
                            <td>
                                <?php
                                $menilai = CompetencyPeers::model()->find(array(
                                    'condition' => 'year = :year AND assessor = :assessor AND assessed = :assessed',
                                    'params' => array(':year' => 2013, ':assessor' => $userDetail->id_user, ':assessed' => $rowBawahan['detail']->id_user),
                                ));
                                if (count($menilai) > 0):
                                    echo '<i class="icon-ok"></i>';
                                else:
                                    echo '<i class="icon-remove"></i>';
                                endif;
                                ?>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <?php endif;?>
            </table>
        </div>
    </div>
 * 
 */
?>
    <div class="row-fluid">
        <div class="span12 widget">
            <div class="widget-content">
                <a class="btn btn-primary" type="submit" id="submitPeers">Simpan Data</a>
                <a class="btn" id="cancelPeers">Batal</a>
            </div>
        </div>
    </div>
</form>