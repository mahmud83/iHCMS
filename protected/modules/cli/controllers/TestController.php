<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class TestController extends Controller {

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

    public function actionSoft() {
        $cli = Yii::app()->allspark->getCliActive();

        $criteriaCompetency = new CDbCriteria();
        $criteriaCompetency->with = array('category0');
        $criteriaCompetency->together = true;
        $criteriaCompetency->condition = 'category0.competency_type_id = :type';
        $criteriaCompetency->params = array(':type' => 1);

        $competency = CompetencyLibrary::model()->findAll($criteriaCompetency);

        $this->render('soft', array(
            'competency' => $competency,
            'cli' => $cli,
        ));
    }

    public function actionSoftNext() {
        $cli = Yii::app()->allspark->getCliActive();

        $criteriaCompetency = new CDbCriteria();
        $criteriaCompetency->with = array('category0');
        $criteriaCompetency->together = true;
        $criteriaCompetency->condition = 'category0.competency_type_id = :type';
        $criteriaCompetency->params = array(':type' => 1);

        $competency = CompetencyLibrary::model()->findAll($criteriaCompetency);

        $this->render('softNext', array(
            'competency' => $competency,
            'cli' => $cli,
        ));
    }

    public function actionAjaxSoftSatu() {
        if ($_POST['soft']['evidence']):
            //cli aktif
            $cli = Yii::app()->allspark->getCliActive();
            //$now = $dates =date('Y-m-d H:i:s', strtotime('2010-10-12 15:09:00') );
            $now = $dates = date('Y-m-d H:i:s');
            //echo Yii::app()->user->getId();

            foreach ($_POST['soft']['evidence'] as $row => $value):
                //cek data di database
                $competencyResult = CompetencyResult::model()->find(array(
                    'condition' => 'assessor_id = :assessor AND assessed_id = :assessed AND competency_library_id = :library AND competency_id = :compActive',
                    'params' => array(
                        ':assessor' => Yii::app()->user->getId(),
                        ':assessed' => Yii::app()->user->getId(),
                        ':library' => $row,
                        ':compActive' => $cli->id,
                    ),
                ));
                if (count($competencyResult) == 0):
                    //$
                    $competencyResult = new CompetencyResult;
                    $competencyResult->assessor_id = Yii::app()->user->getId();
                    $competencyResult->assessed_id = Yii::app()->user->getId();
                    //$competencyResult->year = $cli->year;
                    $competencyResult->competency_library_id = $row;
                    $competencyResult->evidence = $value;
                    //$competencyResult->date = date('Y-m-d');
                    $competencyResult->created = $now;
                    $competencyResult->competency_id = $cli->id;
                    if (!$competencyResult->save()) :
                        print_r($competencyResult->errors);
                    else :
                        echo 'success';
                    endif;
                else:
                    echo 'success';
                endif;
            endforeach;

        elseif ($_POST['soft']['level']):
            //cli aktif
            $cli = Yii::app()->allspark->getCliActive();
            //$now = $dates =date('Y-m-d H:i:s', strtotime('2010-10-12 15:09:00') );
            $now = $dates = date('Y-m-d H:i:s');
            //echo Yii::app()->user->getId();

            foreach ($_POST['soft']['level'] as $row => $value):
                //cek data di database
                $competencyResult = CompetencyResult::model()->find(array(
                    'condition' => 'assessor_id = :assessor AND assessed_id = :assessed AND competency_library_id = :library AND competency_id = :compActive',
                    'params' => array(
                        ':assessor' => Yii::app()->user->getId(),
                        ':assessed' => Yii::app()->user->getId(),
                        ':library' => $row,
                        ':compActive' => $cli->id,
                    ),
                ));
                if (count($competencyResult) == 0):
                    //$
                    $competencyResult = new CompetencyResult;
                    $competencyResult->assessor_id = Yii::app()->user->getId();
                    $competencyResult->assessed_id = Yii::app()->user->getId();
                    //$competencyResult->year = $cli->year;
                    $competencyResult->competency_library_id = $row;
                    $competencyResult->evidence = $value;
                    //$competencyResult->date = date('Y-m-d');
                    $competencyResult->created = $now;
                    $competencyResult->competency_id = $cli->id;
                    if (!$competencyResult->save()) :
                        print_r($competencyResult->errors);
                    else :
                        echo 'success';
                    endif;
                else:
                    echo 'success';
                endif;
            endforeach;

        endif;
    }

}
