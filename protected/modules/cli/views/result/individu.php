<div class="page-header">
    <?php
    $this->widget('ext.battleship.widgets.Breadcrumbs', array(
        'columns' => array(
            'Hasil Pengukuran' => array('index'),
            'Individu',
        ),
    ));
    ?>

    <h1 id="main-heading">
        Kompetensi Individu <span>halaman untuk menampilkan hasil pengukuran kompetensi per individu</span>
    </h1>
</div>

<div class="row-fluid">
    <div class="span12" id="request">
        <div class="row-fluid">
            <div class="span6 widget">
                <div class="row-fluid">
                    <div class="span4">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/shield/img/avatar/avatar1.png">
                    </div>
                    <div class="span8">
                        <h3>Fulan</h3>
                        <p>Kepala Cabang daerah sidokarto.</p>
                    </div>
                </div>
                <div class="row-fluid">
                    <div id="spiderweb"></div>
                </div>
            </div>
            <div class="span6 widget">
                <div class="widget-header"><span class="title">Kompetensi Bisnis</span></div>
                <div class="widget-content">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>kode</th>
                                <th>Kompetensi</th>
                                <th>Rcl</th>
                                <th>Ccl</th>
                                <th>itj</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($competency as $row):
                                ?>
                                <tr>
                                    <th colspan="5"><?php echo $row->name; ?></th>
                                </tr>
                                <?php
                                if (count($row->competencyLibraries) > 0):
                                    foreach ($row->competencyLibraries as $rowLib):
                                        ?>
                                        <tr>
                                            <td><?php echo $rowLib->code; ?></td>
                                            <td><?php echo $rowLib->name; ?></td>
                                            <td>4</td>
                                            <td>3</td>
                                            <td>3</td>
                                        </tr>
                                        <?php
                                    endforeach;
                                endif;
                            endforeach;
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header"><span class="title">Daftar CLI</span></div>
                <div class="widget-content">

                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/highcharts/js/highcharts.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/highcharts/js/highcharts-more.js"
<script src="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/highcharts/js/modules/exporting.js"></script>

<script type="text/javascript">
    $(function() {

        $('#spiderweb').highcharts({
            chart: {
                polar: true,
                type: 'line'
            },
            title: {
                text: 'Grafik Kompetensi',
                x: -80
            },
            pane: {
                size: '80%'
            },
            xAxis: {
                categories: ['Achievement Orientation', 'Innovation', 'Keeping Track', 'Innitiative',
                    'Information Seeking', 'Emphaty'],
                tickmarkPlacement: 'on',
                lineWidth: 0
            },
            yAxis: {
                gridLineInterpolation: 'polygon',
                lineWidth: 0,
                min: 0
            },
            tooltip: {
                shared: true,
                pointFormat: '<span style="color:{series.color}">{series.name}: <b>${point.y:,.0f}</b><br/>'
            },
            legend: {
                align: 'center',
                verticalAlign: 'bottom',
                layout: 'vertical'
            },
            series: [{
                    name: 'RCL',
                    data: [4, 4, 4, 4, 4, 4],
                    pointPlacement: 'on'
                }, {
                    name: 'CCL',
                    data: [3, 3, 3, 3, 3, 3],
                    pointPlacement: 'on'
                }]

        });
    });
</script>

