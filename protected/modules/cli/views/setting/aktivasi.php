<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Setting' => array('index'),
            'Aktivasi',
        ),
    ));
    ?>

    <h1 id="main-heading">
        Setting Tanggal Kompetensi<span>halaman untuk melakukan setting tanggal cli aktif</span>
    </h1>
</div>

<div class="row-fluid">
    <div class="span12" id="request">
        <div class="row-fluid">
            <div class="span12 widget">

                <form class="form-horizontal" action="" method="POST">
                    <?php
                    if (isset($message)):
                        echo '<div class="alert alert-success"><i class="icon-ok"></i>' . $message . '</div>';
                    elseif (isset($error)):
                        echo '<div class="alert alert-error">';
                        echo '<ul>';
                        foreach($error as $row=>$value):
                            echo '<li>'.$row.'</li>';                            
                        endforeach;
                        echo '</ul>';
                        echo '</div>';
                    endif;
                    ?>
                    <div class="control-group">
                        <label class="control-label">Tahun Penilaian</label>
                        <div class="controls">
                            <input type="text" name="Competency[year]" id='year' placeholder="<?php echo date('Y'); ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Tanggal Mulai</label>
                        <div class="controls">
                            <input type="text" name="Competency[start]" class="datepicker" placeholder="<?php echo date('Y-m-d'); ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Tanggal Berakhir</label>
                        <div class="controls">
                            <input type="text" name="Competency[end]" class="datepicker" placeholder="<?php echo date('Y-m-d'); ?>">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button name="submit" type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header"><span class="title">Daftar CLI</span></div>
                <div class="widget-content">
                    <?php
                    $this->widget('bootstrap.widgets.TbGridView', array(
                        'dataProvider' => $cliList,
                        'type' => 'striped bordered condensed',
                        'template' => "{items}",
                        'columns' => array(
                            'year',
                            'start',
                            'end',
                            'status',
                            array(
                                'name' => 'detail',
                                'header' => 'Detail',
                                'type' => 'raw',
                                'value' => 'CHtml::link("Detail", array("stats/dashboard"), array("class" => "btn btn-info"))'
                            ),
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {
        $(".datepicker").datepicker({
            format: "yyyy-mm-dd"
        });

        $('#year').datepicker({
            format: " yyyy",
            viewMode: "years",
            minViewMode: "years"
        });
    });
</script>

