<div class="login-form">
	<div class="title">
		<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.png" alt=""></a>
	</div>
	<div class="content-form">
		<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
				'id'=>'horizontalForm',
				'type'=>'horizontal',
			)); 
		?>
		<?php echo $form->textFieldRow($model, 'username'); ?>
        <?php echo $form->passwordFieldRow($model, 'password'); ?>
        <div class="control-group">
        	<div class="controls">
        		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Login', 'htmlOptions'=>array('class'=>'pull-right'))); ?>
        	</div>
        </div>	
		<?php $this->endWidget(); ?>
	</div>
</div>
		
