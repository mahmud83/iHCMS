<?php

class KaryawanController extends Controller
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
				'actions'=>array('create','update', 'withUser'),
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
		$this->breadcrumbs = array('Karyawan'=>'', 'Karyawan');
		$this->sub_title = 'Detail Data Karyawan';
		
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
		$this->breadcrumbs = array('Karyawan'=>'', 'Karyawan');
		$this->sub_title = 'Tambah Data Karyawan';
		
		$model=new Karyawan;

		// Comment the following line if AJAX validation is not needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Karyawan']))
		{
			$model->attributes=$_POST['Karyawan'];
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
		$this->breadcrumbs = array('Karyawan'=>'', 'Karyawan');
		$this->sub_title = 'Ubah Data Karyawan';
		
		$model=$this->loadModel($id);

		// Comment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Karyawan']))
		{
			$model->attributes=$_POST['Karyawan'];
			if($model->save())
				$this->redirect(array('detailemp', 'id'=>$model->id));
				//$this->redirect(array('view','id'=>$model->id));
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
		$this->breadcrumbs = array('Karyawan'=>'', 'list');
		$this->sub_title = 'Daftar Data Karyawan';
		
		$dataProvider=new CActiveDataProvider('Karyawan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->breadcrumbs = array('Karyawan'=>'', 'list');
		$this->sub_title = 'Manajemen Data Karyawan';
		
		$model=new Karyawan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Karyawan']))
			$model->attributes=$_GET['Karyawan'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	/**
	 * Create Karyawan With User
	 */
	public function actionWithUser() {
		//echo "hello world";
		$this->breadcrumbs = array('Karyawan'=>'', 'Tambah Karyawan');
		$this->sub_title = 'Buat data user dan karyawan baru';
		
		$model=new Karyawan;
		$modelUser = new User;
		
		$model->scenario = 'withUser';

		// Comment the following line if AJAX validation is not needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Karyawan']))
		{
			//create user
			//$modelUser->attributes=$_POST[''];
			$modelUser->username = $_POST['Karyawan']['username'];
			$modelUser->password = $_POST['Karyawan']['password'];
			$modelUser->password2= $_POST['Karyawan']['password2'];
			$getPassword = $modelUser->password;
			$getPassword2 = $modelUser->password2;
			
			$modelUser->hash = $modelUser->generateHash();
			$modelUser->password = $modelUser->hashPassword($getPassword, $modelUser->hash);
			//echo $model->password;
			//exit;
			$modelUser->password2 = $modelUser->hashPassword($getPassword2, $modelUser->hash);
			$modelUser->tgl_buat = date('Y-m-d H:i:s');
			$modelUser->tgl_edit = date('Y-m-d H:i:s');
			if ($modelUser->save()):
				$model->attributes=$_POST['Karyawan'];
				
				//upload Image
				//$rand = rand(0,999);
				$uploadFile = CUploadedFile::getInstance($model, 'avatar');
				$fileName = $modelUser->hash.".".$uploadFile->extensionName;  // random number + file name
				$model->avatar = $fileName;
				$uploadFile->saveAs(Yii::app()->basePath.'/../user/'.$fileName);  
				
				$model->user_id=$modelUser->primaryKey;
				
				if($model->save())
					$this->redirect(array('view','id'=>$model->id));
			endif;
		}

		$this->render('withUser',array(
			'model'=>$model,
		));
	}
	
	/**
	 * Show data from Employee detail and User
	 */
	public function actionDetailEmp($id) {
	
		$modelPendidikan = new KaryawanPendidikan;
		$modelPendidikan->karyawan_id = $id;
		
		$modelPengalamanKerja = new KaryawanPengalamanKerja;
		$modelPengalamanKerja->karyawan_id = $id;
		
		$modelSertifikasi = new KaryawanSertifikasi;
		$modelSertifikasi->karyawan_id = $id;
		
		$modelImigrasi = new KaryawanImigrasi;
		$modelImigrasi->karyawan_id = $id;
		
		$modelTanggungan = new KaryawanTanggungan;
		$modelTanggungan->karyawan_id = $id;
		
		$modelKontakDarurat = new KaryawanKontakDarurat;
		$modelKontakDarurat->karyawan_id = $id;
		
		$this->breadcrumbs = array('Karyawan'=>array('index'), $this->loadModel($id)->nip);
		$this->sub_title = 'Detail Data Personal Karyawan';
		$this->layout='//layouts/column1';
		
		$this->render('personalView',array(
			'model'=>$this->loadModel($id), 
			'modelPendidikan'=>$modelPendidikan->search(),
			'modelPengalamanKerja'=>$modelPengalamanKerja->search(),
			'modelSertifikasi'=>$modelSertifikasi->search(),
			'modelImigrasi'=>$modelImigrasi->search(),
			'modelTanggungan'=>$modelTanggungan->search(),
			'modelKontakDarurat'=>$modelKontakDarurat->search(),
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Karyawan::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='karyawan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
