<?php

class SoftCompetencyController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';
	public $breadcrumbs=array();
	public $sub_title = '';
	public $title = '';
	
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			//'accessControl', // perform access control for CRUD operations
			'rights', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
    
    public function actionExercise()
    {
		$this->render('exercise');
    }
    
    public function actionTest($page = '0') {
	    
	    $modelResult = new CompetencyResult;
	    
	    if (!is_numeric($page)):
	    	$page = '0';
	    endif;
	    
	    
	    $criteria = new CDbCriteria;
	    $criteria->select = 't.id, t.category, t.code, t.dimension, t.name, t.definition, t.level_1, t.level_2, t.level_3, t.level_4, t.level_5';
	    $criteria->with = 'category0';
	    $criteria->condition = 't.active=:active AND category0.competency_type_id=:category';
	    $criteria->params = array(':active'=>'1', ':category'=>'1');
	    $criteria->limit = '1';
	    $criteria->offset = $page;
	    $model = CompetencyLibrary::model()->find($criteria);
	    
	    //echo $model->code;
	    
	    $this->breadcrumbs = array('SoftCompetency'=>'', $model->code);
		$this->sub_title = 'Competency Level Index';
	    
	    $this->render('test', array(
	    	'model'=>$model,
	    	'modelResult'=>$modelResult,
	    )); 
    }
}