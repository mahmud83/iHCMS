<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class HalloController extends Controller {

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
        echo "hello";
    }
}