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
        Statistik Pengukuran Kompetensi tahun 2011<span>halaman statistik kompetensi berdasar tahun pengukuran</span>
    </h1>
</div>

<div class="row-fluid">
    <div class="span12" id="request">
        <div class="row-fluid">
            <div class="span12 widget">
                <div class="widget-header"><span class="title">Statistik Per Golongan</span></div>
                <div class="widget-content">
                    <div id="kompetensi"></div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/highcharts/js/highcharts.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/highcharts/js/modules/exporting.js"></script>

<script type="text/javascript">
    $(function() {
        $('#kompetensi').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Statistik Kompetensi Per Golongan'
            },
            subtitle: {
                text: 'Tahun: 2010'
            },
            xAxis: {
                categories: [
                    'IC',
                    'ID',
                    'IIA',
                    'IIB',
                    'IIC',
                    'IID',
                    'IIIA',
                    'IIIB',
                    'IIIC',
                    'IIID',
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Kompetensi (%)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                    name: 'Soft',
                    data: [49.9, 71.5, 66.4, 49.2, 54.0, 86.0, 45.6, 58.5, 56.4, 94.1]

                }, {
                    name: 'Bisnis',
                    data: [83.6, 78.8, 98.5, 93.4, 86.0, 84.5, 85.0, 84.3, 91.2, 83.5]

                }, {
                    name: 'Manajerial',
                    data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2]

                }]
        });
    });
</script>