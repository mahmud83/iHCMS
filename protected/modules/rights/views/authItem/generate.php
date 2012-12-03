<?php $this->breadcrumbs = array(
	'Rights'=>Rights::getBaseUrl(),
	Rights::t('core', 'Generate items'),
); ?>
<p><?php echo Rights::t('core', 'Please select which items you wish to generate.'); ?></p>
<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p><?php echo Rights::t('core', 'Generate items'); ?></p>
		</div>
		<div class="widget-content">
			<?php //$form=$this->beginWidget('CActiveForm'); ?>
			<?php /** @var BootActiveForm $form */
				$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
					'id'=>'horizontalForm',
					'type'=>'horizontal',
				)); ?>
			<div>
				<table class="table table-striped table-bordered items generate-item-table">
					<tbody>
						<tr class="application-heading-row">
							<th colspan="3"><?php echo Rights::t('core', 'Application'); ?></th>
						</tr>
						<?php $this->renderPartial('_generateItems', array(
							'model'=>$model,
							'form'=>$form,
							'items'=>$items,
							'existingItems'=>$existingItems,
							'displayModuleHeadingRow'=>true,
							'basePathLength'=>strlen(Yii::app()->basePath),
						)); ?>
					</tbody>
				</table>
			</div>

			<div class="form-actions">
   				<?php echo CHtml::link(Rights::t('core', 'Select all'), '#', array(
   					'onclick'=>"jQuery('.generate-item-table').find(':checkbox').attr('checked', 'checked'); return false;",
   					'class'=>'selectAllLink')); ?>
   				/
				<?php echo CHtml::link(Rights::t('core', 'Select none'), '#', array(
					'onclick'=>"jQuery('.generate-item-table').find(':checkbox').removeAttr('checked'); return false;",
					'class'=>'selectNoneLink')); ?>
			</div>

   			<div class="form-actions">
				<?php //echo CHtml::submitButton(Rights::t('core', 'Generate')); ?>
				<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>Rights::t('core', 'Generate'))); ?>
			</div>

			<?php $this->endWidget(); ?>
		</div>
	</div>
</div>