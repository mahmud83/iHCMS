<?php

class WLinkController extends Controller
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
		$this->breadcrumbs = array('WLink'=>'', 'Wlink');
		$this->sub_title = 'Detail Data Wlink';
		
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
		$this->breadcrumbs = array('WLink'=>'', 'Wlink');
		$this->sub_title = 'Tambah Data Wlink';
		
		$model=new WLink;

		// Comment the following line if AJAX validation is not needed
		$this->performAjaxValidation($model);

		if(isset($_POST['WLink']))
		{
			$model->attributes=$_POST['WLink'];
			
			//$model->name=$_POST['WLink']['name'];
			$model->title=($_POST['WLink']['title'] == null)?$_POST['WLink']['name']:$_POST['WLink']['title'];
			$model->url=($_POST['WLink']['url'] == null)?$_POST['WLink']['name']:$_POST['WLink']['url'];
			
			if ($_POST['WLink']['image'] != null):
				//upload Image
				//$rand = rand(0,999);
				$uploadFile = CUploadedFile::getInstance($model, 'image');
				$fileName = $uploadFile->getName();  // random number + file name
				$model->image = $fileName;
				//$uploadFile->saveAs(Yii::app()->basePath.'/../user/'.$fileName);
				$uploadFile->saveAs('/images/'.$fileName);
			endif;
			
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
		$this->breadcrumbs = array('WLink'=>'', 'Wlink');
		$this->sub_title = 'Ubah Data Wlink';
		
		$model=$this->loadModel($id);

		// Comment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['WLink']))
		{
			$model->attributes=$_POST['WLink'];
			
			//$model->name=$_POST['WLink']['name'];
			$model->title=($_POST['WLink']['title'] == null)?$_POST['WLink']['name']:$_POST['WLink']['title'];
			$model->url=($_POST['WLink']['url'] == null)?$_POST['WLink']['name']:$_POST['WLink']['url'];
			$model->auth=$_POST['WLink']['auth'];
			
			if ($_POST['WLink']['image'] != null):
				//upload Image
				//$rand = rand(0,999);
				$uploadFile = CUploadedFile::getInstance($model, 'image');
				$fileName = $uploadFile->getName();  // random number + file name
				$model->image = $fileName;
				//$uploadFile->saveAs(Yii::app()->basePath.'/../user/'.$fileName);
				$uploadFile->saveAs('/images/'.$fileName);
			endif;
			
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
		$this->breadcrumbs = array('WLink'=>'', 'list');
		$this->sub_title = 'Daftar Data Wlink';
		
		$dataProvider=new CActiveDataProvider('WLink');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		*/
		$this->redirect(array('admin'));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->breadcrumbs = array('WLink'=>'', 'list');
		$this->sub_title = 'Manajemen Data Wlink';
		
		$model=new WLink('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['WLink']))
			$model->attributes=$_GET['WLink'];

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
		$model=WLink::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='wlink-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
