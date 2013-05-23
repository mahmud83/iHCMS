<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class WUserController extends Controller {

    public $layout = '//layouts/NMain';
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
    public function actionHae() {
        //echo "hae";
        
        //$person = WUser_::model()->find();
        
        //echo $person->user_name;
        $this->render('none');
    }

}

?>
