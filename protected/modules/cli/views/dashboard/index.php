<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Cli' => array('/cli/'),
            'Dashboard',
        ),
    ));
    ?>

    <h1 id="main-heading">
        Rekap Pengukuran <span>tahun <?php echo $cli->year; ?></span>
    </h1>
</div>

<div data-page="Dashboard" id="contentpane">
    <div class="row-fluid">
        <div class="span4 widget">
            <div class="widget-content">
                <div class="progressbar">
                    <span class="pull-left">Kompetensi Terisi</span>
                    <span class="pull-right">130/200</span>
                    <div class="clearfix"></div>
                    <div class="progress progress-info">
                        <div style="width: 60%" class="bar"></div>
                    </div>
                </div>
                <span class="digit">
                    Kompetensi Soft
                </span>
            </div>
        </div>
        <div class="span4 widget">
            <div class="widget-content">
                <div class="progressbar">
                    <span class="pull-left">Kompetensi Terisi</span>
                    <span class="pull-right">130/200</span>
                    <div class="clearfix"></div>
                    <div class="progress progress-info">
                        <div style="width: 60%" class="bar"></div>
                    </div>
                </div>
                <span class="digit">
                    Kompetensi Bisnis
                </span>
            </div>
        </div>
        <div class="span4 widget">
            <div class="widget-content">
                <div class="progressbar">
                    <span class="pull-left">Kompetensi Terisi</span>
                    <span class="pull-right">130/200</span>
                    <div class="clearfix"></div>
                    <div class="progress progress-info">
                        <div style="width: 60%" class="bar"></div>
                    </div>
                </div>
                <span class="digit">
                    Kompetensi Manajerial
                </span>
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12 widget">
            <div class="widget-header"><span class="title">Detail Kompetensi Individu</span></div>
            <div class="widget-content">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#soft">Kompetensi Soft</a></li>
                    <li><a data-toggle="tab" href="#bisnis">Kompetensi Bisnis</a></li>
                    <li><a data-toggle="tab" href="#manajerial">Kompetensi Manajerial</a></li>
                </ul>
                <div class="tab-content">
                    <div id="soft" class="tab-pane active">
                        <table class="table table-bordered table-condensed table-striped">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Evidence</th>
                                    <th>Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if (count($listSoft) > 0):
                                    foreach ($listSoft as $rowSoft):
                                ?>
                                <tr>
                                    <td colspan="4"><strong><?php echo $rowSoft->code.' - '.$rowSoft->name;?></strong></td>
                                </tr>
                                <?php
                                    foreach($rowSoft->competencyLibraries as $rowLibrary):
                                ?>
                                <tr>
                                    <td><?php echo $rowLibrary->code;?></td>
                                    <td><?php echo $rowLibrary->name;?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <?php
                                    endforeach;
                                    endforeach;
                                endif;
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="bisnis" class="tab-pane">
                        <table class="table table-bordered table-condensed table-striped">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Evidence</th>
                                    <th>Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if (count($listBisnis) > 0):
                                    foreach ($listBisnis as $rowBisnis):
                                ?>
                                <tr>
                                    <td colspan="4"><strong><?php echo $rowBisnis->code.' - '.$rowBisnis->name;?></strong></td>
                                </tr>
                                <?php
                                    foreach($rowBisnis->competencyLibraries as $rowLibrary):
                                ?>
                                <tr>
                                    <td><?php echo $rowLibrary->code;?></td>
                                    <td><?php echo $rowLibrary->name;?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <?php
                                    endforeach;
                                    endforeach;
                                endif;
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="manajerial" class="tab-pane">
                        <table class="table table-bordered table-condensed table-striped">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Evidence</th>
                                    <th>Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if (count($listManajerial) > 0):
                                    foreach ($listManajerial as $rowManajerial):
                                ?>
                                <tr>
                                    <td colspan="4"><strong><?php echo $rowManajerial->code.' - '.$rowManajerial->name;?></strong></td>
                                </tr>
                                <?php
                                    foreach($rowManajerial->competencyLibraries as $rowLibrary):
                                ?>
                                <tr>
                                    <td><?php echo $rowLibrary->code;?></td>
                                    <td><?php echo $rowLibrary->name;?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <?php
                                    endforeach;
                                    endforeach;
                                endif;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>