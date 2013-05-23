<!-- Start Sidebar -->
    <div id="sidebar" class="pull-left">
        <div class="profile">
            <div class="profile-pic"><img src="<?php echo Yii::app()->request->baseUrl; ?>/shield/img/avatar/40x40/avatar5.png"></div>
            <div class="profile-info">
                <span class="name">John Doe</span>
                <span class="akses">Akses Terakhir : 16:11 27 Nov 2012</span>
            </div>
            <div class="profile-panel">
                <a href="#" class="menu">
                    <i class="icon-envelope"></i>
                    <span class="text">Pesan</span>
                    <span class="label label-important">13</span>
                </a>
                <a href="<?php echo Yii::app()->createUrl('site/logout')?>" class="menu">
                    <i class="icon-off"></i>
                    <span class="text">Log Out</span>
                </a>
            </div>
        </div>
                    
        <!-- Start Main Menu 
        <ul class="nav-mainmenu" id="nav-mainmenu">
            <li><a href="#" class="active"><i class="icon-home"></i><span class="text">PIM</span></a>
                <ul>
                    <li><a href="beranda-dashboard.html" class="active"><i class="icon-dashboard"></i><span class="text">Daftar Karyawan</span></a></li>
                    <li><a href="beranda-calendar.html"><i class="icon-calendar"></i><span class="text">Calendar</span></a></li>
                    <li><a href="beranda-icon.html"><i class="icon-gift"></i><span class="text">Icon</span></a></li>
                    <li><a href="beranda-grids.html"><i class="icon-th"></i><span class="text">Grids</span></a></li>
                    <li><a href="beranda-typography.html"><i class="icon-font"></i><span class="text">Typography</span></a></li>
                </ul>
            </li>
            <li><a href="#"><i class="icon-table"></i><span class="text">Table</span></a>
                <ul>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Table</span></a></li>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Table</span></a></li>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Table</span></a></li>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Table</span></a></li>
                </ul>
            </li>
            <li><a href="#"><i class="icon-bar-chart"></i><span class="text">Statistik</span></a>
                <ul>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Statistik</span></a></li>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Statistik</span></a></li>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Statistik</span></a></li>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Statistik</span></a></li>
                </ul>
            </li>
            <li><a href="#"><i class="icon-list"></i><span class="text">Form</span></a>
                <ul>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Form</span></a></li>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Form</span></a></li>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Form</span></a></li>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Form</span></a></li>
                </ul>
            </li>
            <li><a href="#"><i class="icon-cogs"></i><span class="text">Element</span></a>
                <ul>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Element</span></a></li>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Element</span></a></li>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Element</span></a></li>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Element</span></a></li>
                </ul>
            </li>
            <li><a href="#"><i class="icon-gift"></i><span class="text">Extra</span></a>
                <ul>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Extra</span></a></li>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Extra</span></a></li>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Extra</span></a></li>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Extra</span></a></li>
                </ul>
            </li>
            <li><a href="#"><i class="icon-book"></i><span class="text">Docs</span></a>
                <ul>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Docs</span></a></li>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Docs</span></a></li>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Docs</span></a></li>
                    <li><a href="#"><i class="icon-list"></i><span class="text">Docs</span></a></li>
                </ul>
            </li>
        </ul>
    <!-- End Main Menu -->
    
    <?php Yii::app()->allspark->getMenu();?>
    
    </div>
<!-- End Sidebar -->