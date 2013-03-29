<?php

class RollingController extends Controller {

	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';
	public $breadcrumbs=array();
	public $sub_title = '';
	public $title = '';
	
	public function filters() {
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
	 public function accessRules() {
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
	
	public function actionMutasi () {
		$this->breadcrumbs = array('Rolling'=>'', 'Form');
		$this->sub_title = 'Form Mutasi Karyawan';
		
		$this->render('mutasi');
	}
	
	public function actionAjaxUpdate() {
		
		$model = NULL;
		if (Yii::app()->request->isAjaxRequest) {
			if (isset($_POST['PPerson'])) {
				$model = new PPerson;
				//$model_history = new PPersonOccupationHistorical;
				
				$data = $model->findByPk(9);
				$history = PPersonOccupationHistorical::model()->find(array(
					'select'=>'start_date',
					'condition'=>'person_id=:PersonId',
					'params'=>array(':PersonId'=>$data->id),
					'limit'=>'1',
					'order'=>'id DESC',
				));
			}
			$model=$_POST['PPerson'];
		}
		
        $myValue = "Content updated in AJAX";
 
        $this->renderPartial('_ajaxContent', array('myValue'=>$myValue, 'model'=>$data, 'history'=>$history), false, true);
	}
}