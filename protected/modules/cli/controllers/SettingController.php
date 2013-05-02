<?php

class SettingController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column1';
    public $breadcrumbs = array();
    public $sub_title = '';
    public $title = '';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            //'accessControl', // perform access control for CRUD operations
            'rights', // perform access control for CRUD operations
        );
    }

    public function actionIndex() {
        $this->render('index');
    }

    public function actionAktivasi() {
        $model = new WPreference;

        /*
          $model_tahun=WPreference::model()->findAll(array(
          'select'=>'name as tahun_cli',
          'condition'=>'name=:name',
          'params'=>array(':name'=>'tahun_cli'),
          ));

          $model_tanggal=WPreference::model()->findAll(array(
          'select'=>'name as tanggal_cli',
          'condition'=>'name=:name',
          'params'=>array(':name'=>'tanggal_cli'),
          ));
         */

        $model_tahun = $this->loadModel('tahun_cli');
        $model_tanggal = $this->loadModel('tanggal_cli');

        if (isset($_POST['WPreference'])) {
            if ($_POST['WPreference']['tahun_cli']) {
                $model_tahun->value = $_POST['WPreference']['tahun_cli'];
                $model_tahun->save();
            }
            if ($_POST['WPreference']['tanggal_cli']) {
                $model_tanggal->value = $_POST['WPreference']['tanggal_cli'];
                $model_tanggal->save();
            }
            $this->redirect(array('aktivasi'));
        }


        $this->render('aktivasi', array(
            'model_tahun' => $model_tahun,
            'model_tanggal' => $model_tanggal,
        ));
    }

    public function loadModel($name) {
        //$model=WPreference::model()->findByPk($id);

        $criteria = new CDbCriteria;
        $criteria->select = 'value as ' . $name . ', value, name, id';
        $criteria->condition = 'name=:name';
        $criteria->params = array(':name' => $name);
        $model = WPreference::model()->find($criteria);

        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
    
    public function actionGiveTask(){
        $competencyCategory = new CompetencyCategory;
        
        $this->render('givetask', array(
            'competencyCategory' => $competencyCategory,
        ));
    }

}