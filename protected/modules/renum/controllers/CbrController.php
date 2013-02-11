<?php

class CbrController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	public $breadcrumbs=array();
	public $sub_title = '';
	public $title = '';
	
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
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

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->breadcrumbs = array('Cbr'=>'', 'Cbr');
		$this->sub_title = 'Detail Data Cbr';
		
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$this->breadcrumbs = array('Cbr'=>'', 'Cbr');
		$this->sub_title = 'Tambah Data Cbr';
		
		$model=new Cbr;

		// Comment the following line if AJAX validation is not needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Cbr']))
		{
			$model->attributes=$_POST['Cbr'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$this->breadcrumbs = array('Cbr'=>'', 'Cbr');
		$this->sub_title = 'Ubah Data Cbr';
		
		$model=$this->loadModel($id);

		// Comment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Cbr']))
		{
			$model->attributes=$_POST['Cbr'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->breadcrumbs = array('Cbr'=>'', 'list');
		$this->sub_title = 'Daftar Data Cbr';
		
		$dataProvider=new CActiveDataProvider('Cbr');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->breadcrumbs = array('Cbr'=>'', 'list');
		$this->sub_title = 'Manajemen Data Cbr';
		
		$model=new Cbr('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Cbr']))
			$model->attributes=$_GET['Cbr'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Cbr::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cbr-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
    
    public function actionForm()
    {
    
    	$this->layout='//layouts/column1';
		$this->breadcrumbs = array('Cbr'=>'', 'list');
		$this->sub_title = 'Daftar Data Cbr';
		
		$model = new Cbr;
        $modelKh = new CbrKnowHow;
        $modelPs = new CbrProblemSolving;
        $modelAc = new CbrAccountability;
        
        // Comment the following line if AJAX validation is needed
		$this->performAjaxValidation(array($model, $modelAc, $modelKh, $modelPs));
        
		$this->render('inputForm',array(
			'model'=>$model,
            'modelKh'=>$modelKh,
            'modelPs'=>$modelPs,
            'modelAc'=>$modelAc
		));        
    }
    
    public function actionPsp($kha, $psv) {
	    //$kha = ($_POST['kha'] != '')? strtolower($_POST['kha']):'87';
	    //$psv = ($_POST['psv'] != '')? strtolower($_POST['psv']):'38';
	    
	    $models = WOption::model()->pullvalue('cbr_psp');
	    
	    foreach ($models as $m):
			$value = $m->value;
		endforeach;
		
		$value = CJSON::decode($value);
		
		$oke = $value[$psv][$kha];
		
		return $oke;
    }
    
    public function actionPsv() {
    	
	    $tet = ($_POST['tet'] != '')? strtolower($_POST['tet']):'g';
	    $tce = ($_POST['tce'] != '')? strtolower($_POST['tce']):'1';
	    $kha = ($_POST['kha'] != '')? strtolower($_POST['kha']):'152';
	    
	    $act = array("+", "-");
	    $head = str_replace($act, "", $tet);
	    
	    $models = WOption::model()->pullvalue('cbr_psv');
	    
	    $sesuai = WOption::model()->pullValue('cbr_hub');
	    
	    foreach ($models as $m):
			$value = $m->value;
		endforeach;
		
		foreach ($sesuai as $m):
			$hub = $m->value;
		endforeach;
		
		$value = CJSON::decode($value);
		$hub = CJSON::decode($hub);
		
		$oke = $value[$head][$tet][$tce];
		$info = $hub[$kha];
		$result = array_search(strval($oke),$info);
		$res = "tidak sesuai";
		
		//var_dump($oke);
		//var_dump($result);
		if(isset($info)):
			foreach($info as $list=>$row):
				if ($row == $oke):
					$res = "sesuai";
				endif;
			endforeach;
		endif;
		
		$psp = $this->actionPsp($kha, $oke);
		///*
		echo CJSON::encode(array
         (
             'isi'=>$oke,
             'psp'=>$psp,
             'info'=>$res,
        ));
        // */
        //var_dump($value);
        Yii::app()->end();
    }
    
    public function actionAcc() {
	    $fta = ($_POST['fta'] != '')? strtolower($_POST['fta']):'a';
	    $aid = ($_POST['aid'] != '')? strtolower($_POST['aid']):'a';
	    $amt = ($_POST['amt'] != '')? $_POST['amt']:'1';
	    $toi = ($_POST['toi'] != '')? strtolower($_POST['toi']):'r';
	    $prf = ($_POST['prf'] != '')? strtolower($_POST['prf']):'0';
	    
	    $models = WOption::model()->pullvalue('cbr_acc');
	    
	    foreach ($models as $m):
			$value = $m->value;
		endforeach;
		
		$value = CJSON::decode($value);
		
		if ($_POST['aid'] != '') :
			$oke = $value[$fta][$aid];
		else:
			$oke = $value[$fta][$amt][$toi];
		endif;
		
		echo CJSON::encode(array
         (
             'isi'=>$oke,
        ));
        Yii::app()->end();
    }
    
    public function actionNama() {
    
    	$tkh = ($_POST['tkh'] != '')? strtolower($_POST['tkh']):'a';
    	$mkh = ($_POST['mkh'] != '')? strtolower($_POST['mkh']):'n';
    	$hrs = ($_POST['hrs'] != '')? strtolower($_POST['hrs']):'1';
    	$psv = ($_POST['psv'] != '')? strtolower($_POST['psv']):'10';
    	//$tkh = $_POST['CbrKnowHow']['tkh'];
    	
    	$act = array("+", "-");
	    $head = str_replace($act, "", $tkh);
    
    	$models = WOption::model()->pullvalue('cbr_mkh');
    	
    	//$result = array();
		foreach ($models as $m):
			$value = $m->value;
		endforeach;
		
		$value = CJSON::decode($value);
		
		$oke = $value[$head][$tkh][$mkh][$hrs];
		$psp = $this->actionPsp($oke, $psv);
		
		/*if ($_POST['mkh']):
			$tkh = "satu";
		else:
			$tkh = "dua";
		endif;*/
		
		echo CJSON::encode(array
         (
             //'isi'=>$head."-".$tkh."-".$mkh."-".$hrs,
             'isi'=>$oke,
             'psp'=>$psp,
        ));
        Yii::app()->end();
    }
    
    public function actionMkh() {
	    $mkh = array(
	    	'152'=>array('25','29'),
	    	'175'=>array('25','29','33'),
	    	'200'=>array('29','33','38'),
	    	'230'=>array('33','38','43'),
	    	'264'=>array('33','38','43'),
	    	'304'=>array('38','43','50'),
	    	'350'=>array('38','43','50'),
	    	'400'=>array('43','50','57'),
	    	'460'=>array('50','57'),
	    	'528'=>array('50','57','66'),
	    	'608'=>array('50','57','66'),
	    	'700'=>array('57','66'),
	    );
	echo CJSON::encode($mkh);
    }
}
