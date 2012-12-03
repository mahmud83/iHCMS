<?php

Yii::import('Zii.widget.CPortlet');

class Submenu extends CPortlet {
	
	public $title;
	public $menu;
	
	public function init() {
		$this->hideOnEmpty = false;
		
		$controllerId= Yii:app()->controller;
		
		if (method_exist($controllerId, 'getSubMenu')):
			$this->menu = $controllerId->getSubmenu();
		endif;
		
		parent::init();
	}
	
	protected function renderContent() {
		if (isset($this->menu)):
			$this->render('subMenu', array('menu'=>$this->menu));
		endif;
	}
}