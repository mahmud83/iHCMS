<?php

Yii::import('zii.widget.CPortlet');

class MyMenu extends CPortlet {
	
	public function init() {
		$this->title = 'kelola data';
		parent::init();
	}
	
	public function renderContent() {
		$this->render('mymenu');
	}
}