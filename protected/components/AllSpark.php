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
	
	public function renderAvatar () {
		$user_id = Yii::app()->user->id;
		Yii::import('application.modules.pim.models.Karyawan');
		$avatar =  Karyawan::model()->find('user_id=:userID', array(':userID'=>$user_id))->avatar;
		if (empty($avatar)):
			$avatar = "male.jpg";
		endif;
		
		return $avatar;
	}
	
	public function getActions ($controllers, $module=null) {
		$user_actions = Yii::app()->metadata->getActions($controllers, $module);
		$render = array();
		if (sizeof($user_actions) > 0):
			$i=0;
			foreach($user_actions as $action):
				$render[$i]=array('label'=>$action, 'url'=>array($action));
				$i++;
			endforeach;
		endif;
		return $render;
	}
	
	public function Preference($name = '') {
		return Preference::model()->find('name=:Name', array(':Name'=>$name))->value;	
	}
	
	public function getUsername () {
		Yii::import('application.modules.pim.models.Karyawan');
		
		$model = new Karyawan;
		$model->user_id = Yii::app()->user->id;
		
		if ($model->id == null):
			$name = Yii::app()->user->id;
		else:
			$name = $model->nama_depan." ".$model->nama_tengah." ".$model->nama_belakang;
		endif;
		
		return $name;
	}
}