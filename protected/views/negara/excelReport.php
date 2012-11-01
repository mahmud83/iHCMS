<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      kode		</th>
 		<th width="80px">
		      nama		</th>
 		<th width="80px">
		      iso3		</th>
 		<th width="80px">
		      numcode		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->kode; ?>
		</td>
       		<td>
			<?php echo $row->nama; ?>
		</td>
       		<td>
			<?php echo $row->iso3; ?>
		</td>
       		<td>
			<?php echo $row->numcode; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
