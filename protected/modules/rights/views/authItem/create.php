<?php $this->breadcrumbs = array(
	'Rights'=>Rights::getBaseUrl(),
	Rights::t('core', 'Create :type', array(':type'=>Rights::getAuthItemTypeName($_GET['type']))),
); ?>

<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p><?php echo Rights::t('core', 'Create :type', array(':type'=>Rights::getAuthItemTypeName($_GET['type']),)); ?></p>
		</div>
		<div class="widget-content">
			<?php $this->renderPartial('_form', array('model'=>$formModel)); ?>
		</div>
	</div>
</div>