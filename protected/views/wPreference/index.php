<?php
$this->breadcrumbs=array(
	'Wpreferences',
);

$this->menu=array(
	array('label'=>'Create WPreference','url'=>array('create')),
	array('label'=>'Manage WPreference','url'=>array('admin')),
);
?>
<?php 
/*
$this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
*/
?>

<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Form</p>
		</div>
		<div class="widget-content">
			<form action="#" name="setting-form" class="form-horizontal" method="post">
				<div class="control-group">
			    	<label class="control-label" for="inputEmail">Site Name</label>
			    	<div class="controls">
			    		<input type="text" id="siteName" name="WPreference[site_name]" placeholder="Site Name" >
			    	</div>
			    </div>
			    
			    <div class="control-group">
			    	<label class="control-label" for="inputEmail">Site Logo</label>
			    	<div class="controls">
			    		<input type="file" id="siteLogo" name="WPreference[site_logo]" >
			    	</div>
			    </div>
			    
			    <div class="control-group">
			    	<label class="control-label" for="inputEmail">Email Company</label>
			    	<div class="controls">
			    		<input type="text" id="email" name="WPreference[email]" placeholder="Email Company">
			    	</div>
			    </div>
			    
			    <div class="control-group">
			    	<label class="control-label" for="inputEmail">Timezone</label>
			    	<div class="controls">
			    		<input type="text" id="timezone" name="WPreference[timezone]" placeholder="Set Timezone">
			    	</div>
			    </div>
			    
			    <div class="control-group">
			    	<div class="controls">
			    		<button class="btn btn-primary" type="submit" name="submit">Create</button>
			    		<button class="btn" type="reset" name="reset">Reset</button>
			    	</div>
			    </div>
			</form>
		</div>
	</div>
</div>
