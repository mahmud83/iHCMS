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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> update meneh
    }
    
    public function actionPsv() {
    	
	    $tet = ($_POST['tet'] != '')? strtolower($_POST['tet']):'a';
	    $tce = ($_POST['tce'] != '')? strtolower($_POST['tce']):'1';
	    
	    $act = array("+", "-");
	    $head = str_replace($act, "", $tet);
	    
	    $models = WOption::model()->pullvalue('cbr_psv');
	    
	    foreach ($models as $m):
			$value = $m->value;
		endforeach;
		
		$value = CJSON::decode($value);
		
		$oke = $value[$head][$tet][$tce];
		
		echo CJSON::encode(array
         (
             'isi'=>$oke,
        ));
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
		
		/*if ($_POST['mkh']):
			$tkh = "satu";
		else:
			$tkh = "dua";
		endif;*/
		
		echo CJSON::encode(array
         (
             'isi'=>$oke,
        ));
        Yii::app()->end();
		
		//	$result[] = array(
	      //          'value' => $m->value,
	        //        'id' => $m->id,
	         //   );
	     //var_dump($oke);
    	/*
        if(($_POST['tkh']!='') && ($_POST['mkh'] != '') && ($_POST['hrs'] != ''))
        {
            //$isi.='Hai Cowok Cakep'.$_POST['tkh']. " - ".$_POST['mkh']." - ".$_POST['hrs'];
            $models = WOption::model()->pullvalue('cbr_mkh');
            
        }
        else {
            $isi.='Hai Cewek Cantik'.$_POST['tkh']. " - ".$_POST['mkh']." - ".$_POST['hrs'];
        }

        echo CJSON::encode(array
         (
             'isi'=>$isi,
        ));
        Yii::app()->end();
          */
    }
    
    public function actionMkh() {
	    $mkh = array(
	    	"87"=>array(
	    		"38"=>33,
	    		"43"=>38,
	    		"50"=>43,
	    		"57"=>50,
	    		"66"=>57,
	    		"76"=>66,
	    		"87"=>76,
	    		"100"=>87,
	    		"115"=>100,
	    		"132"=>115,
	    		"152"=>132,
	    		"175"=>152,
	    		"200"=>175,
	    		"230"=>200,
	    		"264"=>230,
	    		"304"=>264,
	    		"350"=>304,
	    		"400"=>350,
	    		"460"=>400,
	    		"528"=>460,
	    		"608"=>528,
	    		"700"=>608,
	    		"800"=>700,
	    		"920"=>800,
	    		"1056"=>920,
	    		"1216"=>1056,
	    		"1400"=>1216,
	    		"1600"=>1400,
	    		"1840"=>1600,
	    		"2112"=>1840,
	    		"2432"=>2112,
	    		"2800"=>2432,
	    		"3200"=>2800,
	    	),
	    	"76"=>array(
	    		"38"=>29,
	    		"43"=>33,
	    		"50"=>38,
	    		"57"=>43,
	    		"66"=>50,
	    		"76"=>57,
	    		"87"=>66,
	    		"100"=>76,
	    		"115"=>87,
	    		"132"=>100,
	    		"152"=>115,
	    		"175"=>132,
	    		"200"=>152,
	    		"230"=>175,
	    		"264"=>200,
	    		"304"=>230,
	    		"350"=>264,
	    		"400"=>304,
	    		"460"=>350,
	    		"528"=>400,
	    		"608"=>460,
	    		"700"=>528,
	    		"800"=>608,
	    		"920"=>700,
	    		"1056"=>800,
	    		"1216"=>920,
	    		"1400"=>1056,
	    		"1600"=>1216,
	    		"1840"=>1400,
	    		"2112"=>1600,
	    		"2432"=>1840,
	    		"2800"=>2112,
	    		"3200"=>2432,
	    	),
	    	"65"=>array(
	    		"38"=>25,
	    		"43"=>29,
	    		"50"=>33,
	    		"57"=>38,
	    		"66"=>43,
	    		"76"=>50,
	    		"87"=>57,
	    		"100"=>66,
	    		"115"=>76,
	    		"132"=>87,
	    		"152"=>100,
	    		"175"=>115,
	    		"200"=>132,
	    		"230"=>152,
	    		"264"=>175,
	    		"304"=>200,
	    		"350"=>230,
	    		"400"=>264,
	    		"460"=>304,
	    		"528"=>350,
	    		"608"=>400,
	    		"700"=>460,
	    		"800"=>528,
	    		"920"=>608,
	    		"1056"=>700,
	    		"1216"=>800,
	    		"1400"=>920,
	    		"1600"=>1056,
	    		"1840"=>1216,
	    		"2112"=>1400,
	    		"2432"=>1600,
	    		"2800"=>1840,
	    		"3200"=>2112,
	    	),
	    	"57"=>array(
	    		"38"=>22,
	    		"43"=>25,
	    		"50"=>29,
	    		"57"=>33,
	    		"66"=>38,
	    		"76"=>43,
	    		"87"=>50,
	    		"100"=>57,
	    		"115"=>66,
	    		"132"=>76,
	    		"152"=>68,
	    		"175"=>100,
	    		"200"=>115,
	    		"230"=>132,
	    		"264"=>152,
	    		"304"=>175,
	    		"350"=>200,
	    		"400"=>230,
	    		"460"=>264,
	    		"528"=>304,
	    		"608"=>350,
	    		"700"=>400,
	    		"800"=>460,
	    		"920"=>528,
	    		"1056"=>608,
	    		"1216"=>700,
	    		"1400"=>800,
	    		"1600"=>920,
	    		"1840"=>1056,
	    		"2112"=>1216,
	    		"2432"=>1400,
	    		"2800"=>1600,
	    		"3200"=>1840,
	    	),
	    	"50"=>array(
	    		"38"=>19,
	    		"43"=>22,
	    		"50"=>25,
	    		"57"=>29,
	    		"66"=>33,
	    		"76"=>38,
	    		"87"=>43,
	    		"100"=>50,
	    		"115"=>57,
	    		"132"=>66,
	    		"152"=>76,
	    		"175"=>87,
	    		"200"=>100,
	    		"230"=>115,
	    		"264"=>132,
	    		"304"=>152,
	    		"350"=>175,
	    		"400"=>200,
	    		"460"=>230,
	    		"528"=>264,
	    		"608"=>304,
	    		"700"=>350,
	    		"800"=>400,
	    		"920"=>460,
	    		"1056"=>528,
	    		"1216"=>608,
	    		"1400"=>700,
	    		"1600"=>800,
	    		"1840"=>920,
	    		"2112"=>1056,
	    		"2432"=>1216,
	    		"2800"=>1400,
	    		"3200"=>1600,
	    	),
	    	"43"=>array(
	    		"38"=>16,
	    		"43"=>19,
	    		"50"=>22,
	    		"57"=>25,
	    		"66"=>29,
	    		"76"=>33,
	    		"87"=>38,
	    		"100"=>43,
	    		"115"=>50,
	    		"132"=>57,
	    		"152"=>66,
	    		"175"=>76,
	    		"200"=>87,
	    		"230"=>100,
	    		"264"=>115,
	    		"304"=>132,
	    		"350"=>152,
	    		"400"=>175,
	    		"460"=>200,
	    		"528"=>230,
	    		"608"=>264,
	    		"700"=>304,
	    		"800"=>350,
	    		"920"=>400,
	    		"1056"=>460,
	    		"1216"=>528,
	    		"1400"=>608,
	    		"1600"=>700,
	    		"1840"=>800,
	    		"2112"=>920,
	    		"2432"=>1056,
	    		"2800"=>1216,
	    		"3200"=>1400,
	    	),
	    	"38"=>array(
	    		"38"=>14,
	    		"43"=>16,
	    		"50"=>19,
	    		"57"=>22,
	    		"66"=>25,
	    		"76"=>29,
	    		"87"=>33,
	    		"100"=>38,
	    		"115"=>43,
	    		"132"=>50,
	    		"152"=>57,
	    		"175"=>66,
	    		"200"=>76,
	    		"230"=>87,
	    		"264"=>100,
	    		"304"=>115,
	    		"350"=>132,
	    		"400"=>152,
	    		"460"=>175,
	    		"528"=>200,
	    		"608"=>230,
	    		"700"=>264,
	    		"800"=>304,
	    		"920"=>350,
	    		"1056"=>400,
	    		"1216"=>460,
	    		"1400"=>528,
	    		"1600"=>608,
	    		"1840"=>700,
	    		"2112"=>800,
	    		"2432"=>920,
	    		"2800"=>1056,
	    		"3200"=>1216,
	    	),
	    	"33"=>array(
	    		"38"=>12,
	    		"43"=>14,
	    		"50"=>16,
	    		"57"=>19,
	    		"66"=>22,
	    		"76"=>25,
	    		"87"=>29,
	    		"100"=>33,
	    		"115"=>38,
	    		"132"=>43,
	    		"152"=>50,
	    		"175"=>57,
	    		"200"=>66,
	    		"230"=>76,
	    		"264"=>87,
	    		"304"=>100,
	    		"350"=>115,
	    		"400"=>132,
	    		"460"=>152,
	    		"528"=>175,
	    		"608"=>200,
	    		"700"=>230,
	    		"800"=>264,
	    		"920"=>304,
	    		"1056"=>350,
	    		"1216"=>400,
	    		"1400"=>460,
	    		"1600"=>528,
	    		"1840"=>608,
	    		"2112"=>700,
	    		"2432"=>800,
	    		"2800"=>920,
	    		"3200"=>1056,
	    	),
	    	"29"=>array(
	    		"38"=>10,
	    		"43"=>12,
	    		"50"=>14,
	    		"57"=>16,
	    		"66"=>19,
	    		"76"=>22,
	    		"87"=>25,
	    		"100"=>29,
	    		"115"=>33,
	    		"132"=>38,
	    		"152"=>43,
	    		"175"=>50,
	    		"200"=>57,
	    		"230"=>66,
	    		"264"=>76,
	    		"304"=>87,
	    		"350"=>100,
	    		"400"=>115,
	    		"460"=>132,
	    		"528"=>152,
	    		"608"=>175,
	    		"700"=>200,
	    		"800"=>230,
	    		"920"=>264,
	    		"1056"=>304,
	    		"1216"=>350,
	    		"1400"=>400,
	    		"1600"=>460,
	    		"1840"=>528,
	    		"2112"=>608,
	    		"2432"=>700,
	    		"2800"=>800,
	    		"3200"=>920,
	    	),
	    	"25"=>array(
	    		"38"=>9,
	    		"43"=>10,
	    		"50"=>12,
	    		"57"=>14,
	    		"66"=>16,
	    		"76"=>19,
	    		"87"=>22,
	    		"100"=>25,
	    		"115"=>29,
	    		"132"=>33,
	    		"152"=>38,
	    		"175"=>43,
	    		"200"=>50,
	    		"230"=>57,
	    		"264"=>66,
	    		"304"=>76,
	    		"350"=>87,
	    		"400"=>100,
	    		"460"=>115,
	    		"528"=>132,
	    		"608"=>152,
	    		"700"=>175,
	    		"800"=>200,
	    		"920"=>230,
	    		"1056"=>264,
	    		"1216"=>304,
	    		"1400"=>350,
	    		"1600"=>400,
	    		"1840"=>460,
	    		"2112"=>528,
	    		"2432"=>608,
	    		"2800"=>700,
	    		"3200"=>800,
	    	),
	    	"22"=>array(
	    		"38"=>8,
	    		"43"=>9,
	    		"50"=>10,
	    		"57"=>12,
	    		"66"=>14,
	    		"76"=>16,
	    		"87"=>19,
	    		"100"=>22,
	    		"115"=>25,
	    		"132"=>29,
	    		"152"=>33,
	    		"175"=>38,
	    		"200"=>43,
	    		"230"=>50,
	    		"264"=>57,
	    		"304"=>66,
	    		"350"=>76,
	    		"400"=>87,
	    		"460"=>100,
	    		"528"=>115,
	    		"608"=>132,
	    		"700"=>152,
	    		"800"=>175,
	    		"920"=>200,
	    		"1056"=>230,
	    		"1216"=>264,
	    		"1400"=>304,
	    		"1600"=>350,
	    		"1840"=>400,
	    		"2112"=>460,
	    		"2432"=>528,
	    		"2800"=>608,
	    		"3200"=>700,
	    	),
	    	"19"=>array(
	    		"38"=>7,
	    		"43"=>8,
	    		"50"=>9,
	    		"57"=>10,
	    		"66"=>12,
	    		"76"=>14,
	    		"87"=>16,
	    		"100"=>19,
	    		"115"=>22,
	    		"132"=>25,
	    		"152"=>29,
	    		"175"=>33,
	    		"200"=>38,
	    		"230"=>43,
	    		"264"=>50,
	    		"304"=>57,
	    		"350"=>66,
	    		"400"=>76,
	    		"460"=>87,
	    		"528"=>100,
	    		"608"=>115,
	    		"700"=>132,
	    		"800"=>152,
	    		"920"=>175,
	    		"1056"=>200,
	    		"1216"=>230,
	    		"1400"=>264,
	    		"1600"=>304,
	    		"1840"=>350,
	    		"2112"=>400,
	    		"2432"=>460,
	    		"2800"=>528,
	    		"3200"=>608,
	    	),
	    	"16"=>array(
	    		"38"=>6,
	    		"43"=>7,
	    		"50"=>8,
	    		"57"=>9,
	    		"66"=>10,
	    		"76"=>12,
	    		"87"=>14,
	    		"100"=>16,
	    		"115"=>19,
	    		"132"=>22,
	    		"152"=>25,
	    		"175"=>29,
	    		"200"=>33,
	    		"230"=>38,
	    		"264"=>43,
	    		"304"=>50,
	    		"350"=>57,
	    		"400"=>66,
	    		"460"=>76,
	    		"528"=>87,
	    		"608"=>100,
	    		"700"=>115,
	    		"800"=>132,
	    		"920"=>152,
	    		"1056"=>175,
	    		"1216"=>200,
	    		"1400"=>230,
	    		"1600"=>264,
	    		"1840"=>304,
	    		"2112"=>350,
	    		"2432"=>400,
	    		"2800"=>460,
	    		"3200"=>528,
	    	),
	    	"14"=>array(
	    		"38"=>5,
	    		"43"=>6,
	    		"50"=>7,
	    		"57"=>8,
	    		"66"=>9,
	    		"76"=>10,
	    		"87"=>12,
	    		"100"=>14,
	    		"115"=>16,
	    		"132"=>19,
	    		"152"=>22,
	    		"175"=>25,
	    		"200"=>29,
	    		"230"=>33,
	    		"264"=>38,
	    		"304"=>43,
	    		"350"=>50,
	    		"400"=>57,
	    		"460"=>66,
	    		"528"=>76,
	    		"608"=>87,
	    		"700"=>100,
	    		"800"=>115,
	    		"920"=>132,
	    		"1056"=>152,
	    		"1216"=>175,
	    		"1400"=>200,
	    		"1600"=>230,
	    		"1840"=>364,
	    		"2112"=>304,
	    		"2432"=>350,
	    		"2800"=>400,
	    		"3200"=>460,
	    	),
	    	"12"=>array(
	    		"38"=>4,
	    		"43"=>5,
	    		"50"=>6,
	    		"57"=>7,
	    		"66"=>8,
	    		"76"=>9,
	    		"87"=>10,
	    		"100"=>12,
	    		"115"=>14,
	    		"132"=>16,
	    		"152"=>19,
	    		"175"=>22,
	    		"200"=>25,
	    		"230"=>29,
	    		"264"=>33,
	    		"304"=>38,
	    		"350"=>43,
	    		"400"=>50,
	    		"460"=>57,
	    		"528"=>66,
	    		"608"=>76,
	    		"700"=>87,
	    		"800"=>100,
	    		"920"=>115,
	    		"1056"=>132,
	    		"1216"=>152,
	    		"1400"=>175,
	    		"1600"=>200,
	    		"1840"=>230,
	    		"2112"=>264,
	    		"2432"=>304,
	    		"2800"=>350,
	    		"3200"=>400,
	    	),
	    	"10"=>array(
	    		"38"=>3,
	    		"43"=>4,
	    		"50"=>5,
	    		"57"=>6,
	    		"66"=>7,
	    		"76"=>8,
	    		"87"=>9,
	    		"100"=>10,
	    		"115"=>12,
	    		"132"=>14,
	    		"152"=>16,
	    		"175"=>19,
	    		"200"=>22,
	    		"230"=>25,
	    		"264"=>29,
	    		"304"=>33,
	    		"350"=>38,
	    		"400"=>43,
	    		"460"=>50,
	    		"528"=>57,
	    		"608"=>66,
	    		"700"=>76,
	    		"800"=>87,
	    		"920"=>100,
	    		"1056"=>115,
	    		"1216"=>132,
	    		"1400"=>152,
	    		"1600"=>175,
	    		"1840"=>200,
	    		"2112"=>230,
	    		"2432"=>264,
	    		"2800"=>304,
	    		"3200"=>350,
	    	),
	    );
	echo CJSON::encode($mkh);
<<<<<<< HEAD
=======
=======
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
>>>>>>> hitung cbr
>>>>>>> update meneh
    }
}
