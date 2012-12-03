<?php

class AllSpark extends CApplicationComponent {
	
	
	public function renderSubmenu ($controllers, $module="", $block=array()) {
	
		$render = "<ul>";
		foreach ($controllers as $row=>$name):
			$name = str_replace('Controller', '', $name);
			$string = preg_replace('/(?<=\\w)(?=[A-Z])/',' $1', $name);
			$string = trim($string);
			$key = "okay";
			if (sizeof($block) > 0):
				foreach ($block as $rowBlock=>$nameBlock):
					if ($string == $nameBlock):
						//do nothing
					else:
						$render .= $this->renderLink ($string, $name, $module);
					endif;
				endforeach;
			else:
				$render .= $this->renderLink ($string, $name, $module);
			endif;
		endforeach;
		$render .= "</ul>";
		
		return $render;
	}
	
	private function renderLink ($string, $name, $module) {
		$render = "<li><a href=\"".Yii::app()->request->baseUrl."/index.php/".$module."/".$name."\"><i class=\"icon-user\"></i>".$string."</li>";
		return $render;
	}
	
	public function renderAva () {
		
	}
}