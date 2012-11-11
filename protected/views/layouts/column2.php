<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span2">
	<?php
	$this->widget('bootstrap.widgets.TbTabs', array(
		'type'=>'tabs',
		'stacked'=>true,
		'tabs'=>array(
			array('label'=>'Home', 'url'=>'#asa'),
			array('label'=>'Profile', 'url'=>'http://google.com'),
			array('label'=>'Messages', 'url'=>'http://google.com'),
		),
	));
	?>
	
	<?php
		/*$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));*/
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'nav nav-tabs nav-stacked'),
		));
		/*$this->endWidget();*/
	?>
	
</div>
<div class="span10">
	<div class="row-fluid">
		<div class="span12">
			<?php
			//ill say it's breadcrumbs
			$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		    	'links'=>array('Library'=>'#', 'Data'),
		    ));
		    ?>
		</div>
	</div>
		<?php echo $content; ?>
</div>


<?php /*<div class="row-fluid">
	<div class="span12">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="span-5 last">
		<div id="sidebar">
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operations',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
		</div><!-- sidebar -->
	</div>
</div>
*/ ?>
<?php $this->endContent(); ?>