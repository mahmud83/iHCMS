<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Administrator</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="shortcut icon" href="favicon.ico">

        <!-- ===================== MASTER CSS ===================== 
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/shield/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/shield/css/bootstrap-responsive.min.css">
        !-->
        <!-- ===================== Icon CSS ===================== -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/shield/css/font-awesome.min.css">

        <!-- ===================== SITE CSS ===================== -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/shield/css/theme.css">

        <!-- Fullcalendar -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/fullcalendar/fullcalendar.css" media="screen" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/fullcalendar/fullcalendar.print.css" media="print" />
        
        <!-- datepicker -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/datepicker/css/datepicker.css" />

        <!-- DualListBox -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/bootstrap-duallistbox/bootstrap-duallistbox.css" />
        
        <!-- Select2 -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/select2/select2.css" />
        
        <style>
            .my-loader {
                background: white url('<?php echo Yii::app()->request->baseUrl; ?>/shield/img/loading.gif') right center no-repeat;
                height: 25px;
                width: 25px;
                padding: 5px 15px;
            }
            .white-load {
                width:200px;
                height:200px;
                position: fixed;
                top: 50%;
                left: 50%;
                margin-top: -50px;
                margin-left: -100px;
                background: url('<?php echo Yii::app()->request->baseUrl; ?>/shield/img/loader-yes.gif') right center no-repeat;
                background-size:300px auto;
            }
        </style>
    </head>
    <body>
        <div id="container">
            <?php $this->beginContent('//layouts/NHeader'); ?>
            <?php $this->endContent(); ?>
            <div id="wrapper">

                <?php $this->beginContent('//layouts/NSidebar'); ?>
                <?php $this->endContent(); ?>

                <!-- Start MainContent -->
                <div id="maincontent">
                    <?php echo $content; ?>
                </div>
                <!-- End MainContent -->

                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
        </div>
        
        <!-- ===================== SITE JS ===================== -->
        <!--
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/shield/js/jquery-1.9.1.min.js"></script>
        
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/shield/js/jquery-ui-1.10.2.custom.min.js"></script>
        
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/shield/js/bootstrap.min.js"></script>
        !-->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/shield/js/application.js"></script>

        <!-- ===================== PLUGINS JS ===================== -->
        <!-- datepicker !-->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/datepicker/js/bootstrap-datepicker.js"></script>
        <!-- SparkLine -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- DualListBox -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/bootstrap-duallistbox/jquery.bootstrap-duallistbox.js"></script>
        <!-- Select2 -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/select2/select2.js"></script>
        <script type="text/javascript">
            $(function() {
                $('.sparkline').sparkline('html', {enableTagOptions: true});
            });
        </script>
        
        <div class="modal-backdrop fade in" id="backdrop" style="display:none;">
            <div class="white-load"></div>
        </div>
    </body>
</html>