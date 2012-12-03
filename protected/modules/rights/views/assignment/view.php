<?php $this->breadcrumbs = array(
	'Rights'=>Rights::getBaseUrl(),
	Rights::t('core', 'Assignments'),
); ?>
<p><?php echo Rights::t('core', 'Here you can view which permissions has been assigned to each user.'); ?></p>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p><?php echo Rights::t('core', 'Assignments'); ?></p>
		</div>
		<div class="widget-content">
			<?php $this->widget('bootstrap.widgets.TbGridView', array(
				'type'=>'striped bordered',
				'dataProvider'=>$dataProvider,
				'template'=>"{items}\n{pager}",
				'emptyText'=>Rights::t('core', 'No assignment found.'),
				'columns'=>array(
		    		array(
		    			'name'=>'name',
		    			'header'=>Rights::t('core', 'Name'),
		    			'type'=>'raw',
		    			'htmlOptions'=>array('class'=>'name-column'),
		    			'value'=>'$data->getAssignmentNameLink()',
		    		),
		    		array(
		    			'name'=>'assignments',
		    			'header'=>Rights::t('core', 'Roles'),
		    			'type'=>'raw',
		    			'htmlOptions'=>array('class'=>'role-column'),
		    			'value'=>'$data->getAssignmentsText(CAuthItem::TYPE_ROLE)',
		    		),
					array(
		    			'name'=>'assignments',
		    			'header'=>Rights::t('core', 'Tasks'),
		    			'type'=>'raw',
		    			'htmlOptions'=>array('class'=>'task-column'),
		    			'value'=>'$data->getAssignmentsText(CAuthItem::TYPE_TASK)',
		    		),
					array(
		    			'name'=>'assignments',
		    			'header'=>Rights::t('core', 'Operations'),
		    			'type'=>'raw',
		    			'htmlOptions'=>array('class'=>'operation-column'),
		    			'value'=>'$data->getAssignmentsText(CAuthItem::TYPE_OPERATION)',
		    		),
			    ),
			));?>
		</div>
	</div>
</div>