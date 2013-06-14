<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class CompetencyPeersController extends Controller {

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
    
    public function actionIndex() {
        
    }
    
    public function actionSoft() {
        $this->render('soft');
    }
}
