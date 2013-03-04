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
		/*
		$this->breadcrumbs = array('Cbr'=>'', 'list');
		$this->sub_title = 'Daftar Data Cbr';
		
		$dataProvider=new CActiveDataProvider('Cbr');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		*/
		$this->layout='//layouts/column1';
		$this->breadcrumbs = array('Cbr'=>'', 'list');
		$this->sub_title = 'Daftar Data CBR';
		
		$model=new Cbr('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Cbr']))
			$model->attributes=$_GET['Cbr'];

		$this->render('index',array(
			'model'=>$model,
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
	
	public function actionJobFamily() {
	
		$this->layout='//layouts/column1';
		$this->breadcrumbs = array('Cbr'=>'', 'Job Family');
		$this->sub_title = 'Manajemen Data Cbr Berdasar Job Family';
		
		
		$model=new cbr('jbSearch');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Cbr']))
			$model->attributes=$_GET['Cbr'];

		$this->render('jobFamily',array(
			'model'=>$model,
		));
		/*
		$dataProvider=new Cbr::model()->jobFamily();
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));*/
	}
	
	public function actionByJobFamily () {
		
		$this->layout='//layouts/column1';
		$this->breadcrumbs = array('Cbr'=>'', 'Job Family');
		$this->sub_title = 'Manajemen Data Cbr Berdasar Job Family';
		
		$model_jabatan = new WOccupation;
		
		if(isset($_POST['WOccupation'])){
			$model = Cbr::model()->jobFamily($_POST['WOccupation']['job_family']);
			
			$this->render('byJobFamily', array(
			'model_jabatan' => $model_jabatan,
			'model'=> $model,
			));
		}
		else {
			$this->render('byJobFamily', array(
				'model_jabatan' => $model_jabatan,
			));
		}
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
		$this->sub_title = 'Input Data CBR';
		
		$model = new Cbr;
        $modelKh = new CbrKnowHow;
        $modelPs = new CbrProblemSolving;
        $modelAc = new CbrAccountability;
        
        // Comment the following line if AJAX validation is needed
		$this->performAjaxValidation(array($model, $modelAc, $modelKh, $modelPs));
		
		if(isset($_POST['Cbr']))
		{
			/*
			$model->attributes=$_POST['Cbr'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
			*/
			//echo "hae";
			//var_dump($_POST['Cbr']);
			//exit();
			
			//var_dump($_POST['Cbr']);
			//echo "<br/>";
			//var_dump($_POST['CbrKnowHow']);
			//echo "<br/>";
			//var_dump($_POST['CbrProblemSolving']);
			//echo "<br/>";
			//var_dump($_POST['CbrAccountability']);
			
			$model->attributes=$_POST['Cbr'];
			$model->date = date("Y-m-d");
			
			if($model->save()) {
				
				$primary = $model->getPrimaryKey();
				
				$modelKh->attributes=$_POST['CbrKnowHow'];
				$modelKh->cbr_id = $primary;
				$modelKh->save();
				
				$modelPs->attributes=$_POST['CbrProblemSolving'];
				$modelPs->cbr_id = $primary;
				$modelPs->save();
				
				$modelAc->attributes=$_POST['CbrAccountability'];
				$modelAc->cbr_id = $primary;
				$modelAc->save();
				
				$this->redirect(array('view','id'=>$model->id));
			}
			else {
				var_dump($model->attributes);
			}
		}
		else { 
			$this->render('inputForm',array(
				'model'=>$model,
	            'modelKh'=>$modelKh,
	            'modelPs'=>$modelPs,
	            'modelAc'=>$modelAc
			));
		}        
    }
    
    private function hitungKha($tkh, $mkh, $hrs) {
    	
    	$act = array("+", "-");
	    $head = str_replace($act, "", $tkh);
    
    	$models = WOption::model()->pullvalue('cbr_mkh');
    	
    	//$result = array();
		foreach ($models as $m):
			$value = $m->value;
		endforeach;
		
		$value = CJSON::decode($value);
		
		$nilai = $value[$head][$tkh][$mkh][$hrs];
		
		return $nilai;
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
    	
	    $tet = ($_POST['tet'] != '')? strtolower($_POST['tet']):'d';
	    $tce = ($_POST['tce'] != '')? strtolower($_POST['tce']):'2+';
	    
	    $tkh = ($_POST['tkh'] != '')? strtolower($_POST['tkh']):'e-';
    	$mkh = ($_POST['mkh'] != '')? strtolower($_POST['mkh']):'ii';
    	$hrs = ($_POST['hrs'] != '')? strtolower($_POST['hrs']):'2';
    	
    	$kha = $this->hitungKha($tkh, $mkh, $hrs);
    	//var_dump($kha);
    	//exit();
	    
	    //$act = array("+", "-");
	    //$head = str_replace($act, "", $tet);
	    
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
		
		//$oke = $value[$head][$tet][$tce];
		$oke = $value[$tet][$tce];
		
		//var_dump($value[$tet][$tce]);
		//exit();
		
		$cek = "no";
		$res = "1";
		foreach ($hub as $point=>$value):
			//var_dump($point);
			//echo "<br/>";
			if ($point == $kha):
				$cek = "yes";
				$info = $hub[$kha];
				//$result = array_search(strval($oke),$info);
				//var_dump($info);
				//exit();
			endif;
		endforeach;
		//print_r($hub);
		//exit();
		//$result = array_search(strval($oke),$info);
		
		//var_dump($oke);
		//var_dump($result);
		if ($cek == "yes"):
			$res = "3";
			if(isset($info)):
				foreach($info as $list=>$row):
					if ($row == $oke):
						$res = "2";
					endif;
				endforeach;
			endif;
		endif;
		
		
		$psp = $this->actionPsp($kha, $oke);
		//print_r($oke);
		//exit;
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
	    
	    $kha = ($_POST['kha'] != '')? strtolower($_POST['kha']):'0';
	    $psa = ($_POST['psa'] != '')? strtolower($_POST['psa']):'0';
	    
	    $models = WOption::model()->pullvalue('cbr_acc');
	    $tangga = WOption::model()->pullvalue('cbr_level');
	    
	    $act = array("+", "-");
	    $prf = str_replace($act, "", $prf);
	    
	    foreach ($models as $m):
			$value = $m->value;
		endforeach;
		
		foreach ($tangga as $m):
			$hub = $m->value;
		endforeach;
		
		$value = CJSON::decode($value);
		$hub = CJSON::decode($hub);
		//print_r($hub);
		//exit();
		if ($_POST['aid'] != '') :
			$oke = $value[$fta][$aid];
		else:
			$oke = $value[$fta][$amt][$toi];
		endif;
		//echo "oke = ".$oke;
		
		if ($prf != '0'):
			$key = array_search($oke, $hub);
			if (isset($key)):
				$key = $key;
			else:
				$key=0;
			endif;
			
			$new_key = $key-$prf;
			
			$new_val = $hub[$new_key];
			//var_dump($new_val);
			//exit();
		else:
			$new_val = $oke;
		endif;
		
		echo CJSON::encode(array
         (
             'isi'=>$new_val,
             'total'=>$new_val+$kha+$psa,
        ));
        Yii::app()->end();
    }
    
    public function actionNama() {
    
    	$tkh = ($_POST['tkh'] != '')? strtolower($_POST['tkh']):'a';
    	$mkh = ($_POST['mkh'] != '')? strtolower($_POST['mkh']):'n';
    	$hrs = ($_POST['hrs'] != '')? strtolower($_POST['hrs']):'1';
    	//$psv = ($_POST['psv'] != '')? strtolower($_POST['psv']):'10';
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
	   	$fail = array('5600',
	   	'4864',
	   	'4224',
	   	'3680',
	   	'3200',
	   	'2800',
	   	'2432',
	   	'2112',
	   	'1840',
	   	'1600',
	   	'1400',
	   	'1216',
	   	'1056',
	   	'920',
	   	'800',
	   	'700',
	   	'608',
	   	'528',
	   	'460',
	   	'400',
	   	'350',
	   	'304',
	   	'264',
	   	'230',
	   	'200',
	   	'175',
	   	'152',
	   	'132',
	   	'115',
	   	'100',
	   	'87',
	   	'76',
	   	'66',
	   	'57',
	   	'50',
	   	'43',
	   	'38',
	   	'33',
	   	'29',
	   	'25',
	   	'22',
	   	'19',
	   	'16',
	   	'14',
	   	'12',
	   	'10',
	   	'9',
	   	'8',
	   	'7',
	   	'6',
	   	'5',
	   	'4',);
	   	 echo CJSON::encode($fail);
    }
    
    public function actionOmg() {
             $mkh = array(
                'a'=>array(
                        
                            'a'=>'8',
                            'b'=>'10',
                            'c'=>'14',
                            'd'=>'19',
                            '1'=>array(
                                    'r'=>'10',
                                    'c'=>'14',
                                    's'=>'19',
                                    'p'=>'25'
                                ),
                            '2'=>array(
                                    'r'=>'14',
                                    'c'=>'19',
                                    's'=>'25',
                                    'p'=>'33'
                                ),
                            '3'=>array(
                                    'r'=>'19',
                                    'c'=>'25',
                                    's'=>'33',
                                    'p'=>'43'
                                ),
                            '4'=>array(
                                    'r'=>'25',
                                    'c'=>'33',
                                    's'=>'43',
                                    'p'=>'57'
                                ),
                            '5'=>array(
                                    'r'=>'33',
                                    'c'=>'43',
                                    's'=>'57',
                                    'p'=>'76'
                                )
                        
                ),
                  'b'=>array(
                        
                            'a'=>'12',
                            'b'=>'16',
                            'c'=>'22',
                            'd'=>'29',
                            '1'=>array(
                                    'r'=>'16',
                                    'c'=>'22',
                                    's'=>'29',
                                    'p'=>'38'
                                ),
                            '2'=>array(
                                    'r'=>'22',
                                    'c'=>'29',
                                    's'=>'38',
                                    'p'=>'50'
                                ),
                            '3'=>array(
                                    'r'=>'29',
                                    'c'=>'38',
                                    's'=>'50',
                                    'p'=>'66'
                                ),
                            '4'=>array(
                                    'r'=>'38',
                                    'c'=>'50',
                                    's'=>'66',
                                    'p'=>'87'
                                ),
                            '5'=>array(
                                    'r'=>'50',
                                    'c'=>'66',
                                    's'=>'87',
                                    'p'=>'115'
                                )
                        
                ),
                'c'=>array(
                        
                            'a'=>'19',
                            'b'=>'25',
                            'c'=>'33',
                            'd'=>'43',
                            '1'=>array(
                                    'r'=>'25',
                                    'c'=>'33',
                                    's'=>'43',
                                    'p'=>'57'
                                ),
                            '2'=>array(
                                    'r'=>'33',
                                    'c'=>'43',
                                    's'=>'57',
                                    'p'=>'76'
                                ),
                            '3'=>array(
                                    'r'=>'43',
                                    'c'=>'57',
                                    's'=>'76',
                                    'p'=>'100'
                                ),
                            '4'=>array(
                                    'r'=>'57',
                                    'c'=>'76',
                                    's'=>'100',
                                    'p'=>'132'
                                ),
                            '5'=>array(
                                    'r'=>'76',
                                    'c'=>'100',
                                    's'=>'132',
                                    'p'=>'175'
                                )
                        
                ),
                'd'=>array(
                       
                            'a'=>'29',
                            'b'=>'38',
                            'c'=>'50',
                            'd'=>'66',
                            '1'=>array(
                                    'r'=>'38',
                                    'c'=>'50',
                                    's'=>'66',
                                    'p'=>'87'
                                ),
                            '2'=>array(
                                    'r'=>'50',
                                    'c'=>'66',
                                    's'=>'87',
                                    'p'=>'115'
                                ),
                            '3'=>array(
                                    'r'=>'66',
                                    'c'=>'87',
                                    's'=>'115',
                                    'p'=>'152'
                                ),
                            '4'=>array(
                                    'r'=>'87',
                                    'c'=>'115',
                                    's'=>'152',
                                    'p'=>'200'
                                ),
                            '5'=>array(
                                    'r'=>'115',
                                    'c'=>'152',
                                    's'=>'200',
                                    'p'=>'264'
                                )
                        
                ),
                'e'=>array(
                        
                            'a'=>'43',
                            'b'=>'57',
                            'c'=>'76',
                            'd'=>'100',
                            '1'=>array(
                                    'r'=>'57',
                                    'c'=>'76',
                                    's'=>'100',
                                    'p'=>'132'
                                ),
                            '2'=>array(
                                    'r'=>'76',
                                    'c'=>'100',
                                    's'=>'132',
                                    'p'=>'175'
                                ),
                            '3'=>array(
                                    'r'=>'100',
                                    'c'=>'132',
                                    's'=>'175',
                                    'p'=>'230'
                                ),
                            '4'=>array(
                                    'r'=>'132',
                                    'c'=>'175',
                                    's'=>'230',
                                    'p'=>'304'
                                ),
                            '5'=>array(
                                    'r'=>'175',
                                    'c'=>'230',
                                    's'=>'304',
                                    'p'=>'400'
                                )
                        
                ),
                'f'=>array(
                       
                            'a'=>'66',
                            'b'=>'87',
                            'c'=>'115',
                            'd'=>'152',
                            '1'=>array(
                                    'r'=>'87',
                                    'c'=>'115',
                                    's'=>'152',
                                    'p'=>'200'
                                ),
                            '2'=>array(
                                    'r'=>'115',
                                    'c'=>'152',
                                    's'=>'200',
                                    'p'=>'264'
                                ),
                            '3'=>array(
                                    'r'=>'152',
                                    'c'=>'200',
                                    's'=>'264',
                                    'p'=>'350'
                                ),
                            '4'=>array(
                                    'r'=>'200',
                                    'c'=>'264',
                                    's'=>'350',
                                    'p'=>'460'
                                ),
                            '5'=>array(
                                    'r'=>'264',
                                    'c'=>'350',
                                    's'=>'460',
                                    'p'=>'608'
                                )
                        
                ),
                'g'=>array(
                       
                            'a'=>'100',
                            'b'=>'132',
                            'c'=>'175',
                            'd'=>'230',
                            '1'=>array(
                                    'r'=>'132',
                                    'c'=>'175',
                                    's'=>'230',
                                    'p'=>'304'
                                ),
                            '2'=>array(
                                    'r'=>'175',
                                    'c'=>'230',
                                    's'=>'304',
                                    'p'=>'400'
                                ),
                            '3'=>array(
                                    'r'=>'230',
                                    'c'=>'304',
                                    's'=>'400',
                                    'p'=>'528'
                                ),
                            '4'=>array(
                                    'r'=>'304',
                                    'c'=>'400',
                                    's'=>'528',
                                    'p'=>'700'
                                ),
                            '5'=>array(
                                    'r'=>'400',
                                    'c'=>'528',
                                    's'=>'700',
                                    'p'=>'920'
                                )
                        
                ),
             );
         echo CJSON::encode($mkh);
        }
        
        public function actionProblemSolving()
    {
        $proSel = array(
                    'a'=>array(
                            '1'=>'10',
                            '1+'=>'12',
                            '2'=>'14',
                            '2+'=>'16',
                            '3'=>'19',
                            '3+'=>'22',
                            '4'=>'25',
                            '4+'=>'29',
                            '5'=>'33',
                            '5+'=>'38'
                    ),
                    'b'=>array(
                            '1'=>'12',
                            '1+'=>'14',
                            '2'=>'16',
                            '2+'=>'19',
                            '3'=>'22',
                            '3+'=>'25',
                            '4'=>'29',
                            '4+'=>'33',
                            '5'=>'38',
                            '5+'=>'43'
                    ),
                    'c'=>array(
                            '1'=>'14',
                            '1+'=>'16',
                            '2'=>'19',
                            '2+'=>'22',
                            '3'=>'25',
                            '3+'=>'29',
                            '4'=>'33',
                            '4+'=>'38',
                            '5'=>'43',
                            '5+'=>'50'
                    ),
                    'd'=>array(
                            '1'=>'16',
                            '1+'=>'19',
                            '2'=>'22',
                            '2+'=>'25',
                            '3'=>'29',
                            '3+'=>'33',
                            '4'=>'38',
                            '4+'=>'43',
                            '5'=>'50',
                            '5+'=>'57'
                    ),
                    'e'=>array(
                            '1'=>'19',
                            '1+'=>'22',
                            '2'=>'25',
                            '2+'=>'29',
                            '3'=>'33',
                            '3+'=>'38',
                            '4'=>'43',
                            '4+'=>'50',
                            '5'=>'57',
                            '5+'=>'66'
                    ),
                    'f'=>array(
                            '1'=>'22',
                            '1+'=>'25',
                            '2'=>'29',
                            '2+'=>'33',
                            '3'=>'38',
                            '3+'=>'43',
                            '4'=>'50',
                            '4+'=>'57',
                            '5'=>'66',
                            '5+'=>'76'
                    ),
                    'g'=>array(
                            '1'=>'25',
                            '1+'=>'29',
                            '2'=>'33',
                            '2+'=>'38',
                            '3'=>'43',
                            '3+'=>'50',
                            '4'=>'57',
                            '4+'=>'66',
                            '5'=>'76',
                            '5+'=>'87'
                    ),
                    'h'=>array(
                            '1'=>'29',
                            '1+'=>'33',
                            '2'=>'38',
                            '2+'=>'43',
                            '3'=>'50',
                            '3+'=>'57',
                            '4'=>'66',
                            '4+'=>'76',
                            '5'=>'87',
                            '5+'=>'100'
                    ),
        );
        echo CJSON::encode($proSel);
    }
}
