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
    
    public function actionAjaxLookup() {
        //if (Yii::app()->request->isAjaxRequest && isset($_GET['term'])) {
        $models = WUserDetail::model()->suggestUsername($_GET['term']);

        $result = array();
        foreach ($models as $m)
            $result[] = array(
                'value' => '' . $m->nama . ' (' . $m->nik . ')',
                'id' => $m->id,
                'id_user'=>$m->id_user,
            );

        echo CJSON::encode($result);
        //}
    }

}

?>
