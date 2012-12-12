<?php

class AllSpark extends CApplicationComponent {
	
	
	public function moduleName($name = '') {
	
		if ($name !== ''):
			$moduleName = ucfirst($name);
		elseif (isset(Yii::app()->controller->module)):
			$moduleName = Yii::app()->controller->module->getName();
		elseif (isset(Yii::app()->controller->id)):
			$moduleName = Yii::app()->controller->id;
		else:
			$moduleName = 'Default';
		endif;
		
		echo ucfirst($moduleName);
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