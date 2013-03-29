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
		    	'id'=>'cli_soft',
		    	'htmlOptions'=>array('class'=>'well'),
		    )); ?>
		    
		    <?php echo $form->redactorRow($modelResult, 'evidence', array('class'=>'span4', 'rows'=>5)); ?>
            
            <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
        	</div>
            
            <?php $this->endWidget(); ?>
        </div>
	</div>
</div>
