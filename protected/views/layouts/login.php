<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta charset="utf-8">
	<title>Jektungan Admin Theme</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="description apps">
	<meta name="author" content="masbenx">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/global.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.css">
</head>
<body>
	<!-- navbar start here !-->
	<div class="top">
		<div class="navbar">
		  <div class="navbar-inner">
		    <div class="logo pull-left">
		    	<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.png" alt=""></a>
		    </div>
		    
		    <form class="navbar-search pull-right">
		      <input type="text" class="search-query" placeholder="Search">
		    </form>
		    
		  </div>
		</div>
	</div>
	<!-- navbar stop here !-->
	
	<div class="login-container">
		<?php echo $content; ?>
		
	</div>
</body>