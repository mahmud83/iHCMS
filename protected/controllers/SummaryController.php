<?php

class SummaryController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/NMain';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'rights', // perform access control for CRUD operations
                //'postOnly + delete', // we only allow deletion via POST request
        );
    }
    
    public function actionDashboard() {
        //echo 'hae';
        echo "<pre>";
        print_r(Yii::app()->allspark->getEmpJabatan());
    }
}