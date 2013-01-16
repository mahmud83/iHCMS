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
		Yii::import('application.modules.pim.models.PPerson');
		
		$avatar =  PPerson::model()->find('user_id=:userID', array(':userID'=>$user_id))->avatar;
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
		return WPreference::model()->find('name=:Name', array(':Name'=>$name))->value;	
	}
	
	public function getUsername () {
		Yii::import('application.modules.pim.models.PPerson');
		
		$model = new PPerson;
		$model->user_id = Yii::app()->user->id;
		
		if ($model->id == null):
			$name = $model->user->username;//Yii::app()->user->id;
		else:
			$name = $model->nama_depan." ".$model->nama_tengah." ".$model->nama_belakang;
		endif;
		
		return $name;
	}
	
	
	public function getMenu($parent='IS NULL') {
	
		$moduleName = (isset(Yii::app()->controller->module))?Yii::app()->controller->module->getName():'core';
	
		if ($parent === 'IS NULL'):
			//$links = Wlink::model()->findAll('parent_id '.$parent);
			$criteria = new CDbCriteria;
			$criteria->condition = 'wModule.name = :moduleName AND t.parent_id IS NULL';
			$criteria->params = array(':moduleName'=>$moduleName);
			
			$links = Wlink::model()->with('wModule')->findAll($criteria);
		else:
			$criteria = new CDbCriteria;
			$criteria->condition = 'w_module.name = :moduleName';
			$criteria->params = array(':moduleName'=>$parent);
			
			$links = Wlink::model()->with('module','link.w_module_id')->findAll($criteria);
		endif;
		
		$columns = array();
		
		if (sizeof($links) > 0):
			foreach($links as $link):
				
				//echo CHtml::encode($key->name);
				$columns[]= array(
					'title' => $link->title,
					'name' => $link->name,
					'icon'  => 'icon-home',
					'url' => $link->url,
					'module' => $link->wModule->url,
				);
			endforeach;
		endif;
		
		return $columns;
	}
	
	public function getModule($parent='IS NULL') {
		$links = WModule::model()->findAll('parent_id '.$parent);
		
		$columns = array();
		
		if (sizeof($links) > 0):
			foreach($links as $link):
				
				//echo CHtml::encode($key->name);
				$columns[]= array(
					'title' => $link->title,
					'name' => $link->name,
					'icon'  => 'icon-home',
					'url' => $link->url,
				);
			endforeach;
		endif;
		
		return $columns;
	}
}