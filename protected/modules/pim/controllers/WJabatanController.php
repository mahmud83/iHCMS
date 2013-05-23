<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class WJabatanController extends Controller {

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

    public function actionAjaxLookup() {
        //if (Yii::app()->request->isAjaxRequest && isset($_GET['term'])) {
        $models = WJabatan::model()->suggestUsername($_GET['term']);

        $result = array();
        foreach ($models as $m)
            $result[] = array(
                'value' => '' . $m->nama . ' (' . $m->namaUnit() . ')',
                'id' => $m->id,
            );

        echo CJSON::encode($result);
        //}
    }

}
