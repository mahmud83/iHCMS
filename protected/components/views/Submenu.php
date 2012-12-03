<ul>
	<?php
		$count =  count($menu);
		for ($i=0; $i<$count; $i++){
			$mItem=$menu[$i];
			if (isset($mItem[2])):
				echo "<li ".$mItem[2]." >";
			else :
				echo "<li>";
			endif;
			$mName = $mItem[0];
			$mLink = $mItem[1];
			
			echo CHtml::link($mName, $mLink)."</li>";
		}
	?>
</ul>