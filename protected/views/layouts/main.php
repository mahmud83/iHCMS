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
	
</body>
</html>