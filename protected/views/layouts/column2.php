<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
	<div class="span10">
		<?php echo $content; ?>
	</div>
	
	<div class="span2">
		<?php
			/*$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operations',
			));*/
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'nav nav-tabs nav-stacked'),
			));
			
			$this->widget('application.components.YiiSmartMenu',array(
		        //No required init options
		        'partItemSeparator'=>'.',
		        'upperCaseFirstLetter'=>true,
		 
		        //Same options used in CMenu
			    'items'=>array(
			            array(
			                  'label'=>'Home Page',
			                  'url'=>array('/site/index',
			            ),
			            array(
			                  'label'=>'Other Page',
			                  'url'=>array('something/other'),
			 
			                  //optional, if not set, YSM will controll visibility;
			                  //'visible'=>{your own rule, YSM will not touch this},
			 
			                  //optional, params to be sent to checkAccess() function;
			                  //if not set, YSM will use params from url/submit options
			                  //or $_GET.
			                  'authParams'=>array('myParam'=>'myValue',),
			 
			                  //optional, auth item name to be used in checkAccess() function;
			                  //if not set, YSM will auto generate this.
			                  'authItemName'=>'Admin',
			           ),
			        ),
			    ),
			    ));
			/*$this->endWidget();*/
		?>
		
	</div>
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