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
                    <i class="icon-table"></i> Daftar Penilai
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
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span12 widget">
            <div class="widget-content">
                <a class="btn btn-primary" type="submit" id="submitPeers">Simpan Data</a>
                <a class="btn" id="cancelPeers">Batal</a>
            </div>
        </div>
    </div>
</form>