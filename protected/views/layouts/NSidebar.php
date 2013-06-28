<!-- Start Sidebar -->
<div id="sidebar" class="pull-left">
    <div class="profile">
        <div class="profile-pic"><img src="<?php echo Yii::app()->request->baseUrl; ?>/shield/img/avatar/40x40/avatar5.png"></div>
        <div class="profile-info">
            <span class="name"><?php echo (isset(Yii::app()->allspark->getEmpName()->nama)) ? Yii::app()->allspark->getEmpName()->nama : '-'; ?></span>
            <span class="akses"><?php echo (isset(Yii::app()->allspark->getEmpJabatan()->nama)) ? Yii::app()->allspark->getEmpJabatan()->nama : '-'; ?></span>
        </div>
        <div class="profile-panel">
            <a href="#" class="menu">
                <i class="icon-envelope"></i>
                <span class="text">Pesan</span>
                <!--
                <span class="label label-important">13</span>
                !-->
            </a>
            <a href="<?php echo Yii::app()->createUrl('site/logout') ?>" class="menu">
                <i class="icon-off"></i>
                <span class="text">Log Out</span>
            </a>
        </div>
    </div>

    <?php Yii::app()->allspark->getMenu(); ?>

</div>
<!-- End Sidebar -->