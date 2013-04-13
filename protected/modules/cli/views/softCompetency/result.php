<div class="row-fluid no-clear">
	<div class="span12 widget">
		<div class="widget-title">
			<i class="icon-bar-chart titleicon"></i>
			<p>Soft Competency</p>
		</div>
		<div class="widget-content">
		    <table class="table table-bordered table-hover">
		    	<thead>
		    		<th>Kode</th>
		    		<th>Kompetensi</th>
		    		<th>RCL</th>
		    		<th>CCL</th>
		    		<th>Gap</th>
		    		<th>ITJ</th>
		    		<th>Priority</th>
		    	</thead>
		    	
		    	<tbody>
		    		<?php foreach($model as $row): ?>
		    		<tr <?php echo ($row->level < 2)?'class="error"':'';?>>
		    			<td><?php echo $row->code;?></td>
		    			<td><?php echo $row->name;?></td>
		    			<td>2</td>
		    			<td><?php echo $row->level;?></td>
		    			<td><?php echo $gap=$row->level-2;?></td>
		    			<td>3</td>
		    			<td><?php echo $gap*3;?></td>
		    		</tr>
		    		<?php endforeach; ?>
		    	</tbody>
		    </table>
        </div>
	</div>
</div>
