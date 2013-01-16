<?php

/**
 * @filesource /protected/components/widget/thememilan/SuperMenu.php
 */

class SuperMenu extends CWidget {
	
	public $columns;
	public $active;
	
	public function run() {
		$render = "<ul>";
		
		if ((is_array($this->columns)) && (sizeof($this->columns) > 0)):
			foreach ($this->columns as $row):
				//$active = (isset($row['active']))?"class=\"active\"":"";
				$active = (strtolower($this->active) === strtolower($row['name']))?"class=\"active\"":"";
				$url = ($row['module'] != 'core')?"".$row['module']."/".$row['url']."":"".$row['url']."";
				$icon = (isset($row['icon']))?"<i class=\"".$row['icon']."\"></i>":"";
				$render .= "<li ".$active."><a href=\"".Yii::app()->createUrl($url)."\">".$icon."".ucfirst($row['title'])."</a></li>";
			endforeach;
		endif;
		$render .= "</ul>";
		
		echo $render;
	}
}