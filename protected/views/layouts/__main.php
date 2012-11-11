<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container-fluid" id="header">

	<div class="row-fluid">
		<div class="span12 jumbotron subhead" id="subheader">
			<h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
			<p class="lead">This is The Place I'll Say Something Cool</p>
		</div>
	</div>
	
	<?php
	$this->widget('bootstrap.widgets.TbNavbar', array(
		'brand' => false,
		'fixed' => false,
		'collapse'=>true,
		'items' => array(
			array(
				'class' => 'bootstrap.widgets.TbMenu',
				'items' => array(
					array('label'=>'Home', 'url'=>array('/site/index')),
					array('label'=>'Propinsi', 'url'=>array('/propinsi/index')),
					array('label'=>'Negara', 'url'=>array('/negara/index')),
					array('label'=>'Setting', 'url'=>array('/preference/index')),
					array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
					array('label'=>'Contact', 'url'=>array('/site/contact')),
					array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				)
			)
		)
	));
	?>
</div>

<div class="container-fluid" id="page">

    <div class="row-fluid">
    	<?php echo $content; ?>
    </div>
	
    <div class="row-fluid">
		<div id="footer">
			Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
			All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?>
		</div><!-- footer -->
    </div>
</div><!-- page -->

</body>
</html>
