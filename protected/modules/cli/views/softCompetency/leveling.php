<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p><?php echo $model->code." - ".$model->name; ?></p>
		</div>
		<div class="widget-content">
		    <h3><?php echo $model->category0->name;?> <?php echo ($model->name != $model->category0->name)?'- '.$model->name:'';?></h3>
		    <table class="table table-bordered">
		    	<tr>
		    		<td>Kode</td>
		    		<td><?php echo $model->code;?></td>
		    	</tr>
		    	<tr>
		    		<td>Nama</td>
		    		<td><?php echo $model->name;?></td>
		    	</tr>
		    	<?php if (isset($model->definition)): ?>
		    	<tr>
		    		<td>Keterangan</td>
		    		<td><?php echo $model->definition;?></td>
		    	</tr>
		    	<?php endif; ?>
		    	<tr>
		    		<td>Deskripsi</td>
		    		<td><?php echo $model->category0->description;?></td>
		    	</tr>
		    	<tr>
		    		<td>Definisi</td>
		    		<td><?php echo $model->category0->definition;?></td>
		    	</tr>
		    </table>
		    
		    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		    	'id'=>'verticalForm',
		    	'htmlOptions'=>array('class'=>'well'),
		    	'stateful'=>true,
		    	'type'=>'horizontal',
		    )); ?>
		    <div>
			    <blockquote>
			    <?php echo $modelResult->evidence; ?>
			    </blockquote>
		    </div>
		    <?php echo $form->dropDownListRow($modelResult, 'level',array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('prompt'=>'Pilih salah Satu')); ?>
            <div class="form-cli-button">
            
            <?php //echo CHtml::statefulForm(); ?>
            <?php //$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array(
            	'buttonType'=>'submit',
            	'type'=>'primary',
            	'label'=>($modelResult->level == NULL) ? 'Simpan' : 'Ubah',
            )); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array(
            	'buttonType'=>'reset',
            	'label'=>'Reset',
            )); ?>
        	</div>
			
            
            <?php $this->endWidget(); ?>
        </div>
	</div>
</div>
