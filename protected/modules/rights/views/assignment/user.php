<?php $this->breadcrumbs = array(
	'Rights'=>Rights::getBaseUrl(),
	Rights::t('core', 'Assignments')=>array('assignment/view'),
	$model->getName(),
); ?>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p><?php echo Rights::t('core', 'Assignments for :username', array(':username'=>$model->getName())); ?></p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView', array(
				'dataProvider'=>$dataProvider,
				'type'=>'striped bordered',
				'template'=>"{items}",
				'emptyText'=>Rights::t('core', 'This user has not been assigned any items.'),
				'columns'=>array(
	    			array(
	    				'name'=>'name',
	    				'header'=>Rights::t('core', 'Name'),
	    				'type'=>'raw',
	    				'htmlOptions'=>array('class'=>'name-column'),
	    				'value'=>'$data->getNameText()',
	    			),
	    			array(
	    				'name'=>'type',
	    				'header'=>Rights::t('core', 'Type'),
	    				'type'=>'raw',
	    				'htmlOptions'=>array('class'=>'type-column'),
	    				'value'=>'$data->getTypeText()',
	    			),
	    			array(
	    				'header'=>'&nbsp;',
	    				'type'=>'raw',
	    				'htmlOptions'=>array('class'=>'actions-column'),
	    				'value'=>'$data->getRevokeAssignmentLink()',
	    			),
				),
			));?>			
		</div>
	</div>
</div>

<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p><?php echo Rights::t('core', 'Assign item'); ?></p>
		</div>
		<div class="widget-content">
			<?php if( $formModel!==null ): ?>
			<div class="form">
				<?php $this->renderPartial('_form', array(
					'model'=>$formModel,
					'itemnameSelectOptions'=>$assignSelectOptions,
				)); ?>
			</div>
			<?php else: ?>
				<p class="info"><?php echo Rights::t('core', 'No assignments available to be assigned to this user.'); ?>
			<?php endif; ?>
		</div>
	</div>
</div>

