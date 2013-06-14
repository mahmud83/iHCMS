<?php

class SettingController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/NMain';
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
        //model competency
        $comp = new Competency;
        
        if(isset($_POST['Competency'])){
            
            //print_r($_POST['Competency']);
            //exit();
            $year = str_replace(' ', '', $_POST['Competency']['year']);
            $comp->year = $year;
            $comp->start = $_POST['Competency']['start'];
            $comp->end = $_POST['Competency']['end'];
            
            //$_POST = array_filter($_POST);
            //print_r($model->attributes);
            //exit();
            if (!$comp->save()):
                $error = $comp->getErrors();
            else:
                $message = 'data berhasil disimpan';
            endif;
            //exit();
            
            //print_r($_POST['Competency']);
            //exit();
        }
        
        //get list cli
        $cliCriteria = new CDbCriteria();
        $cliCriteria->order = 'year DESC';
        
        $cliList = new CActiveDataProvider('Competency', array('criteria'=>$cliCriteria));
        
        
        $this->render('aktivasi', array(
            'cliList'=>$cliList,
            'model'=>$comp,
            'message'=>$message,
            'error'=>$error
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