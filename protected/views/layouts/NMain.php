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
        
        <!-- DualListBox -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/bootstrap-duallistbox/bootstrap-duallistbox.css" />
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
        <!-- SparkLine -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- DualListBox -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/shield/plugins/bootstrap-duallistbox/jquery.bootstrap-duallistbox.js"></script>
        <script type="text/javascript">
            $(function() {
                $('.sparkline').sparkline('html', {enableTagOptions: true});
            });
        </script>
    </body>
</html>