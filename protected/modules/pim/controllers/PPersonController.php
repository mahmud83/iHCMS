<?php

class PPersonController extends Controller
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

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->breadcrumbs = array('PPerson'=>'', 'Pperson');
		$this->sub_title = 'Detail Data Pperson';
		
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
		$this->breadcrumbs = array('PPerson'=>'', 'Pperson');
		$this->sub_title = 'Tambah Data Pperson';
		
		$model=new PPerson;

		// Comment the following line if AJAX validation is not needed
		$this->performAjaxValidation($model);

		if(isset($_POST['PPerson']))
		{
			$model->attributes=$_POST['PPerson'];
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
		$this->breadcrumbs = array('PPerson'=>'', 'Pperson');
		$this->sub_title = 'Ubah Data Pperson';
		
		$model=$this->loadModel($id);

		// Comment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['PPerson']))
		{
			$model->attributes=$_POST['PPerson'];
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
		$this->breadcrumbs = array('PPerson'=>'', 'list');
		$this->sub_title = 'Daftar Data Pperson';
		
		$dataProvider=new CActiveDataProvider('PPerson');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->breadcrumbs = array('PPerson'=>'', 'list');
		$this->sub_title = 'Manajemen Data Pperson';
		
		$model=new PPerson('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PPerson']))
			$model->attributes=$_GET['PPerson'];

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
		$model=PPerson::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='pperson-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	/**
	 * Performs autocomplete
	 *
	 */ 
	function actionAutocomplete() {
		if (Yii::app()->request->isAjaxRequest && isset($_GET['term'])) {
			$models = WUser::model()->getData($_GET['term']);
			$result = array();
			foreach ($models as $m) :
	            $result[] = array(
	                'label' => $m->username,
	                'value' => $m->user_id,
	                'id' => $m->user_id,
	                //'field' => $m->attribute_for_another_field,
	            );
            endforeach;
 
        echo CJSON::encode($result);
        }
    }
    
    function actionTest() {
	    $this->render('test');
    }
    
    /**
    * Performs UX simply create user
    *
    */
    function actionAdd() {
	    $this->breadcrumbs = array('PPerson'=>'', 'Pperson');
		$this->sub_title = 'Tambah Data Pperson';
		
		$model=new PPerson;
		$modelUser = new WUser;
		
		$model->scenario = 'add';

		// Comment the following line if AJAX validation is not needed
		$this->performAjaxValidation($model);

		if(isset($_POST['PPerson']))
		{
			//create user
			//$modelUser->attributes=$_POST[''];
			$modelUser->username = $_POST['PPerson']['username'];
			$modelUser->password = $_POST['PPerson']['password'];
			$modelUser->password2= $_POST['PPerson']['password2'];
			$getPassword = $modelUser->password;
			$getPassword2 = $modelUser->password2;
			
			$modelUser->hash = $modelUser->generateHash();
			$modelUser->password = $modelUser->hashPassword($getPassword, $modelUser->hash);
			//echo $model->password;
			//exit;
			
			$modelUser->password2 = $modelUser->hashPassword($getPassword2, $modelUser->hash);
			$modelUser->created_date = date('Y-m-d H:i:s');
			$modelUser->created_by = Yii::app()->user->id;
			
			if ($modelUser->save()):
				
				$model->attributes=$_POST['PPerson'];
				$model->create_date = date('Y-m-d H:i:s');
				$model->create_by = Yii::app()->user->id;
				
				$avatar = CUploadedFile::getInstance($model, 'avatar');
	            $ext = $modelUser->hash.".".$avatar->getExtensionName();
	            $model->avatar = $ext;
	            $model->user_id = $modelUser->primaryKey;
	            $avatar->saveAs(Yii::app()->basePath.'/../avatar/' . $ext);
	            //$avatar->saveAs(Yii::app()->basePath.'/1.jpg');
	            
	            if($model->save()):
	            	$this->redirect(array('detail','id'=>$model->id));
	            endif;
			
			endif;	
			
			/*
			$model->attributes=$_POST['PPerson'];
			$model->namaAttribute=CUploadedFile::getInstance($model,'namaAttribute');
            $ext = $model->avatar->getExtensionName();
            
            if($model->save())
            {
                $model->namaAttribute->saveAs(Yii::app()->basePath.'/avatar/' . $model->id.$ext);
                $this->redirect(array('view','id'=>$model->id));
            }
            */
		}

		$this->render('add',array(
			'model'=>$model,
		));
    }
    
    public function actionDetail($id) {
    	$model = $this->loadModel($id);
    	$this->layout='//layouts/column1';
    	
    	//cek data pendidikan
    	$modelPendidikan = new PPersonEducation;
		$modelPendidikan->person_id = $id;
    	
	    $this->render('detail', array(
	    	'model'=>$model,
	    	'modelPendidikan'=>$modelPendidikan->search(),
	    ));
    }
}
