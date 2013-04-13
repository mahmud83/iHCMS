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
    
    public function actionTest($page = 0) {
	    
	    $userid = Yii::app()->User->getId();
	    $code_id = $this->getPageState('code_id');
	    
	    $employee = $this->getEmployee($userid);
	    
	    $count = $this->getCompetency(array('type'=>'count'));
	    $model = $this->getCompetency(array('type'=>'list', 'offset'=>$page));
	    
		if (!is_numeric($page)):
		    $page = 0;
		endif;
		if ($page >= count($count))
			$this->redirect(array('test'));
		//echo count($count);
		//exit();
		
	    if (count($employee)):
		    
		    $modelResult = $this->getResult(array(
		    	'year' => '2012',
		    	'assessor' => $employee->id,
		    	'assessed' => $employee->id,
		    	'competencyId' => $model->id,
		    ));
		    
		    
		    if(isset($_POST['CompetencyResult'])){
		    	
			    $modelResult->year = '2012';
			    $modelResult->assessor_id = $employee->id;
			    $modelResult->assessed_id = $employee->id;
			    $modelResult->level = '';
			    $modelResult->evidence = $_POST['CompetencyResult']['evidence'];
			    $modelResult->date = date('Y-m-d');
			    $modelResult->competency_library_id = $code_id;
			    //$modelResult->w_occupation_id = '';
			    
			    if ($modelResult->save()){
			    	$page = $page+1;
			    	if ($page < count($count)) :
				    	$this->redirect(array('test','page'=>$page));
				    else:
				    	$this->redirect(array('leveling'));
				    endif;
			    }
		    }
		    
		    //echo $model->code;
		    
		    $this->breadcrumbs = array('SoftCompetency'=>'', $model->code);
			$this->sub_title = 'Competency Level Index';
			$this->setPageState('code_id', $model->id);
		    
		    $this->render('test', array(
		    	'model'=>$model,
		    	'modelResult'=>$modelResult,
		    	//'ahemm'=>$code_id,
		    ));
		else:
			$this->render('test', array(
				'model'=>$model,
				'error'=>'error',
			));
		endif;
    }
    
    public function actionLeveling($page = 0) {
	    
	    $userid = Yii::app()->User->getId();
	    $code_id = $this->getPageState('code_id');
	    
	    $employee = $this->getEmployee($userid);
	    
	    $count = $this->getCompetency(array('type'=>'count'));
	    $model = $this->getCompetency(array('type'=>'list', 'offset'=>$page));
	    
		if (!is_numeric($page)):
		    $page = 0;
		endif;
		if ($page >= count($count))
			$this->redirect(array('test'));
		//echo count($count);
		//exit();
		
		if (count($employee)):
			
		    $modelResult = $this->getResult(array(
		    	'year' => '2012',
		    	'assessor' => $employee->id,
		    	'assessed' => $employee->id,
		    	'competencyId' => $model->id,
		    ));
		    
		    if(isset($_POST['CompetencyResult'])){
		    	
			    $modelResult->level = $_POST['CompetencyResult']['level'];
			    $modelResult->date = date('Y-m-d');
			    
			    if ($modelResult->save()){
			    	$page = $page+1;
			    	if ($page < count($count)) :
				    	$this->redirect(array('leveling','page'=>$page));
				    else:
				    	$this->redirect(array('leveling'));
				    endif;
			    }
		    }
		    
		    //echo $model->code;
		    
		    $this->breadcrumbs = array('SoftCompetency'=>'', $model->code);
			$this->sub_title = 'Competency Level Index';
			$this->setPageState('code_id', $model->id);
		    
		    $this->render('leveling', array(
		    	'model'=>$model,
		    	'modelResult'=>$modelResult,
		    	//'ahemm'=>$code_id,
		    ));
		else:
			$this->render('leveling', array(
				'model'=>$model,
				'error'=>'error',
			));
		endif;
	    
    }
    
    public function actionResult() {
    	$this->breadcrumbs = array('SoftCompetency'=>'', 'result');
		$this->sub_title = 'Competency Level Index';
		
		//$model = $this->getCompetency(array('type'=>'list', 'offset'=>$page));
		
		$criteria = new CDbCriteria;
		$criteria->select = 't.id, t.category, t.code, t.dimension, t.name, t.definition, t.level_1, t.level_2, t.level_3, t.level_4, t.level_5, a.level as level';
		$criteria->with = 'category0';
		$criteria->condition = 't.active=:active AND category0.competency_type_id=:category';
		$criteria->params = array(':active'=>'1', ':category'=>'1');
		$criteria->join = 'LEFT JOIN competency_result a ON t.id = a.competency_library_id';
		$model = CompetencyLibrary::model()->findAll($criteria);
		
	    $this->render('result', array(
	    	'model'=>$model,
	    ));
    }
    
    private function getEmployee($userid) {
	    $employee = PPerson::model()->find(array(
	    	'condition'=>'user_id=:user_id',
	    	'params'=>array(':user_id'=>$userid),
	    )); 
	    
	    return $employee;
    }
    
    private function getCompetency($option=array()) {
	    $criteria = new CDbCriteria;
		$criteria->select = 't.id, t.category, t.code, t.dimension, t.name, t.definition, t.level_1, t.level_2, t.level_3, t.level_4, t.level_5';
		$criteria->with = 'category0';
		$criteria->condition = 't.active=:active AND category0.competency_type_id=:category';
		$criteria->params = array(':active'=>'1', ':category'=>'1');
		
		if ($option["type"] == "count"): 
			$model = CompetencyLibrary::model()->findAll($criteria);
		else:
			//diteruskan untuk lihat limit dan offset
			$criteria->limit = '1';
			$criteria->offset = $option["offset"];
			$model = CompetencyLibrary::model()->find($criteria);
		endif;
		
		return $model;
    }
    
    private function getResult($option=array()) {
	    //cek sudah mengisi di tahun ini atau belum		    
		$criteriaResult = new CDbCriteria;
		$criteriaResult->condition = "year = :year AND assessor_id = :assessor AND assessed_id = :assessed AND competency_library_id = :competency_library";
		$criteriaResult->params = array(':year'=>$option['year'], ':assessor'=>$option['assessor'], ':assessed'=>$option['assessed'], ':competency_library'=>$option['competencyId']);
		$hmm = CompetencyResult::model()->find($criteriaResult);
		    
		if (count($hmm)):
			$modelResult = $hmm;
		else:
			$modelResult = new CompetencyResult;
		endif;
		
		return $modelResult;
    }
    
    
}