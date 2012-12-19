<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo Yii::app()->allspark->Preference('site_name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="description apps">
	<meta name="author" content="masbenx">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/global.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.css">
	<link href="<?php echo Yii::app()->request->baseUrl;?>/css/bwizard.min.css" rel="stylesheet">
</head>
<body>
	<!-- navbar start here !-->
	<div class="top">
		<div class="navbar">
		  <div class="navbar-inner">
		    <div class="logo pull-left">
		    	<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.png" alt=""></a>
		    </div>
		    <div class="nav-config dropdown pull-right">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			    	<i class="icon-cogs"></i>
			    </a>
			    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
			    	<li><a>Change Setting</a></li>
			    	<li><a>Change Setting</a></li>
			    	<li class="divider"></li>
			    	<li><?php echo CHtml::link('Log Out', 'site/logout');?></li>
			    </ul>
		    </div>
		    		    <!--
		    <form class="navbar-search pull-right">
		      <input type="text" class="search-query" placeholder="Search">
		    </form>
		    !-->
		  </div>
		</div>
	</div>
	<!-- navbar stop here !-->
	
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="sidebar">
				<div class="row-fluid user-details">
					<div class="avatar">
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/user/<?php echo Yii::app()->allspark->renderAvatar();?>" width="72px" class="img-rounded">
					</div>
					<div class="details">
						<div class="username">Welcome, <strong><?php echo Yii::app()->allspark->getUsername();?></strong></div>
						<div class="log-data">Last sign in : 16:11 Feb 27th 2012</div>
						<div class="control">
							<a href="#" class="message"><i class="icon-envelope"></i>Notification <span class="badge">10</span></a>
							<?php echo CHtml::link('<i class="icon-unlock"></i>Log Out', 'site/logout', array('class'=>'logout'));?>
						</div>
					</div>
				</div>
				<div class="row-fluid" id="sidebar">
					<div class="first-nav">
						<?php 
						$this->widget('application.components.widgets.thememilan.SuperMenu', array(
							'active'=>(isset($this->module))?$this->module->getName():'core',
							'columns'=> Yii::app()->allspark->getModule()
						)); 
						?>
						
					</div>
				</div>
			</div>
			<div class="content" id="content-scale">
				<div class="second-nav" id="sc">
					<h2><?php Yii::app()->allspark->moduleName(); ?></h2>
					<div class="divider"></div>
					<?php 
						$this->widget('application.components.widgets.thememilan.SuperMenu', array(
							'active'=>(isset($this->ID))?$this->ID:'Dashboard',
							//'columns'=>(isset($this->submenu))?$this->submenu:"",
							'columns'=> Yii::app()->allspark->getMenu()
							)
						); 
					?>
					<!--
					<ul>
						
						<li><a href="change_password.html"><i class="icon-key"></i>Change Password</a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i>Calendar</a></li>
					</ul>
					!-->
				</div>
				<div class="content-wrapper">
					<div class="row-fluid no-clear">
						<div class="span12 head-info">
							<div class="head_breadcrumb">
								<h3><?php echo ucfirst((isset($this->sub_title))?$this->sub_title:$this->getAction()->getId()); ?></h3>
								<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
								    'links'=>$this->breadcrumbs,
								)); ?>
							</div>
							<div class="date">
								<div class="day">08</div> 
								<div class="month">Nov</div> 
								<div class="year">2012</div>
							</div>
						</div>
					</div>
					
					<?php echo $content; ?>
					
				</div>
				<!-- let start draw a footer !-->
				<div class="row-fluid no-clear">
					<div class="span12 footer">
						As usually all rights reserved. And as usually brought to you by <a href="http://masbenx.net">@masbenx</a>
					</div>
				</div>
				<!-- footer end draw here !-->
				<div class="clear-both"></div>
			</div>
		</div>
	</div>
	
	<!-- this place you can add javascript !-->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/highcharts.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modules/exporting.js"></script>
	<script type="text/javascript" language="javascript">
		$(function () {
		    var chart;
		    $(document).ready(function() {
		        chart = new Highcharts.Chart({
		            chart: {
		                renderTo: 'line-chart',
		                type: 'line',
		                marginRight: 130,
		                marginBottom: 25
		            },
		            title: {
		                text: 'Monthly Average Temperature',
		                x: -20 //center
		            },
		            subtitle: {
		                text: 'Source: WorldClimate.com',
		                x: -20
		            },
		            xAxis: {
		                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
		                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
		            },
		            yAxis: {
		                title: {
		                    text: 'Temperature (°C)'
		                },
		                plotLines: [{
		                    value: 0,
		                    width: 1,
		                    color: '#808080'
		                }]
		            },
		            tooltip: {
		                formatter: function() {
		                        return '<b>'+ this.series.name +'</b><br/>'+
		                        this.x +': '+ this.y +'°C';
		                }
		            },
		            legend: {
		                layout: 'vertical',
		                align: 'right',
		                verticalAlign: 'top',
		                x: -10,
		                y: 100,
		                borderWidth: 0
		            },
		            series: [{
		                name: 'Tokyo',
		                data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
		            }, {
		                name: 'New York',
		                data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
		            }, {
		                name: 'Berlin',
		                data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
		            }, {
		                name: 'London',
		                data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
		            }]
		        });
		    });
		    
		});
	</script>
	
</body>
</html>