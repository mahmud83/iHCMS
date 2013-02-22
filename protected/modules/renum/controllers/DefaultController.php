<?php

class DefaultController extends Controller
{
	public $layout='//layouts/column1';
	public $breadcrumbs=array();
	public $sub_title = '';
	public $title = '';
	
	public function actionIndex()
	{
		$this->breadcrumbs = array($this->module->id,);
		$this->sub_title = 'Competency Based Remunerations (CBR)';
		$this->render('index');
	}
}