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
        //get user id
        $id = Yii::app()->user->Id;

        //get user golongan
        $golongan = Yii::app()->allspark->getEmpGolongan();

        //get tahun cli
        $cli = Yii::app()->allspark->getCliActive();

        $competencyCriteria = new CDbCriteria();
        $competencyCriteria->with = array('competencyLibrary'=>array(
            'with'=>array('category0'),
        ));
        $competencyCriteria->together = true;
        $competencyCriteria->condition = 'category0.competency_type_id = :type AND competencyLibrary.active = 1 AND t.golongan = :golongan AND t.competency_id = :cid';
        $competencyCriteria->params = array(
            ':type'=>1,
            ':golongan'=>$golongan->id,
            ':cid'=>$cli->id,
        );
        $competencyCriteria->order = 'category0.code ASC';
        $competency = CompetencyTask::model()->findAll($competencyCriteria);
        
        $this->render('soft', array(
            'competency' => $competency,
            'cli' => $cli,
            'golongan' => $golongan,
        ));
    }

    public function actionAjaxSoftSatu() {
        //echo 'success';
        if ($_POST['soft']['evidence']):
            //cli aktif
            $cli = Yii::app()->allspark->getCliActive();
            $now = $dates = date('Y-m-d H:i:s');

            foreach ($_POST['soft']['evidence'] as $row => $value):
                //cek data di database
                $competencyResult = CompetencyResult::model()->find(array(
                    'condition' => 'assessor_id = :assessor AND assessed_id = :assessed AND competency_task_id = :task AND competency_id = :compActive',
                    'params' => array(
                        ':assessor' => Yii::app()->user->getId(),
                        ':assessed' => Yii::app()->user->getId(),
                        ':task' => $row,
                        ':compActive' => $cli->id,
                    ),
                ));
                if (count($competencyResult) == 0):
                    $competencyResult = new CompetencyResult;
                    $competencyResult->assessor_id = Yii::app()->user->getId();
                    $competencyResult->assessed_id = Yii::app()->user->getId();
                    $competencyResult->competency_task_id = $row;
                    $competencyResult->evidence = $value;
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
        //cek jika masukin level
        elseif ($_POST['soft']['level']):
            $cli = Yii::app()->allspark->getCliActive();
            $now = $dates = date('Y-m-d H:i:s');

            foreach ($_POST['soft']['level'] as $row => $value):
                
                $competencyResult = CompetencyResult::model()->find(array(
                    'condition' => 'assessor_id = :assessor AND assessed_id = :assessed AND competency_task_id = :task AND competency_id = :compActive',
                    'params' => array(
                        ':assessor' => Yii::app()->user->getId(),
                        ':assessed' => Yii::app()->user->getId(),
                        ':task' => $row,
                        ':compActive' => $cli->id,
                    ),
                ));
                if ($competencyResult->level != NULL) {
                    echo 'error';
                } else {
                    //$competencyResult = CompetencyResult::model()->findByPk($row);
                    $competencyResult->assessor_id = Yii::app()->user->getId();
                    $competencyResult->assessed_id = Yii::app()->user->getId();
                    $competencyResult->level = $value;
                    $competencyResult->modified = $now;
                    $competencyResult->competency_id = $cli->id;
                    if (!$competencyResult->save()) :
                        print_r($competencyResult->errors);
                    else :
                        echo 'success';
                    endif;
                }
            endforeach;
        endif;
    }

    public function actionBisnis() {
        //get user id
        $id = Yii::app()->user->Id;

        //get user strata
        $strata = Yii::app()->allspark->getEmpStrata();

        //get tahun cli
        $cli = Yii::app()->allspark->getCliActive();

        $competencyCriteria = new CDbCriteria();
        $competencyCriteria->with = array('competencyLibrary'=>array(
            'with'=>array('category0'),
        ));
        $competencyCriteria->together = true;
        $competencyCriteria->condition = 'category0.competency_type_id = :type AND competencyLibrary.active = 1 AND t.strata = :strata AND t.competency_id = :cid';
        $competencyCriteria->params = array(
            ':type'=>2,
            ':strata'=>$strata->id,
            ':cid'=>$cli->id,
        );
        $competencyCriteria->order = 'category0.code ASC';
        $competency = CompetencyTask::model()->findAll($competencyCriteria);

        $this->render('bisnis', array(
            'competency' => $competency,
            'cli' => $cli,
            'strata' => $strata,
        ));
    }

    public function actionAjaxBisnis() {
        //echo 'success';
        if (($_POST['evidence']) || ($_POST['level'])):
            $cli = Yii::app()->allspark->getCliActive();
            $now = $dates = date('Y-m-d H:i:s');

            foreach ($_POST['evidence'] as $row => $value):
                $level = $_POST['level'][$row];

                //cek data di database
                $competencyResult = CompetencyResult::model()->find(array(
                    'condition' => 'assessor_id = :assessor AND assessed_id = :assessed AND competency_task_id = :library AND competency_id = :compActive',
                    'params' => array(
                        ':assessor' => Yii::app()->user->getId(),
                        ':assessed' => Yii::app()->user->getId(),
                        ':task' => $row,
                        ':compActive' => $cli->id,
                    ),
                ));
                if (count($competencyResult) == 0):
                    //$
                    $competencyResult = new CompetencyResult;
                    $competencyResult->assessor_id = Yii::app()->user->getId();
                    $competencyResult->assessed_id = Yii::app()->user->getId();
                    $competencyResult->competency_task_id = $row;
                    $competencyResult->evidence = $value;
                    $competencyResult->level = $level;
                    $competencyResult->created = $now;
                    $competencyResult->competency_id = $cli->id;
                    if (!$competencyResult->save()) :
                        print_r($competencyResult->errors);
                    else :
                        echo 'success';
                    endif;
                else:
                    //echo 'success';
                    $competencyResult->evidence = $value;
                    $competencyResult->level = $level;
                    $competencyResult->modified = $now;
                    if (!$competencyResult->save()) :
                        print_r($competencyResult->errors);
                    else :
                        echo 'success';
                    endif;
                endif;
            endforeach;
        else:
            echo 'error';
        endif;
    }

    public function actionManagerial() {
        //get user id
        $id = Yii::app()->user->Id;

        //get user jabatan
        $jabatan = Yii::app()->allspark->getEmpJabatan();

        //get tahun cli
        $cli = Yii::app()->allspark->getCliActive();

        //get task
        /*
        $criteriaCompetency = new CDbCriteria();
        $criteriaCompetency->with = array('category0');
        $criteriaCompetency->together = true;
        $criteriaCompetency->join = 'JOIN competency_task ON competency_task.competency_library_id = t.id';
        $criteriaCompetency->condition = 'category0.competency_type_id = :type AND competency_task.occupation = :jabatan AND competency_task.competency_id = :cid';
        $criteriaCompetency->params = array(':type' => 3, ':jabatan' => $jabatan->id, ':cid' => $cli->id);

        $competency = CompetencyLibrary::model()->findAll($criteriaCompetency);
         * 
         */
        $competencyCriteria = new CDbCriteria();
        $competencyCriteria->with = array('competencyLibrary'=>array(
            'with'=>array('category0'),
        ));
        $competencyCriteria->together = true;
        $competencyCriteria->condition = 'category0.competency_type_id = :type AND competencyLibrary.active = 1 AND t.jabatan = :jabatan AND t.competency_id = :cid';
        $competencyCriteria->params = array(
            ':type'=>3,
            ':jabatan'=>$jabatan->id,
            ':cid'=>$cli->id,
        );
        $competencyCriteria->order = 'category0.code ASC';
        $competency = CompetencyTask::model()->findAll($competencyCriteria);

        $this->render('managerial', array(
            'competency' => $competency,
            'cli' => $cli,
            'jabatan' => $jabatan,
        ));
    }

    public function actionAjaxManagerial() {
        //echo 'success';
        if (($_POST['evidence']) || ($_POST['level'])):
            //cli aktif
            $cli = Yii::app()->allspark->getCliActive();
            $now = $dates = date('Y-m-d H:i:s');

            foreach ($_POST['evidence'] as $row => $value):
                //level
                $level = $_POST['level'][$row];

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
                    $competencyResult->competency_library_id = $row;
                    $competencyResult->evidence = $value;
                    $competencyResult->level = $level;
                    $competencyResult->created = $now;
                    $competencyResult->competency_id = $cli->id;
                    if (!$competencyResult->save()) :
                        print_r($competencyResult->errors);
                    else :
                        echo 'success';
                    endif;
                else:
                    //echo 'success';
                    $competencyResult->evidence = $value;
                    $competencyResult->level = $level;
                    $competencyResult->modified = $now;
                    if (!$competencyResult->save()) :
                        print_r($competencyResult->errors);
                    else :
                        echo 'success';
                    endif;
                endif;
            endforeach;
        else:
            echo 'error';
        endif;
    }

    /*
     * test bawahan
     */

    public function actionFeedSoft() {

        //get user id
        $id = Yii::app()->user->Id;

        //get user golongan
        //$golongan = Yii::app()->allspark->getEmpGolongan();

        //get tahun cli
        $cli = Yii::app()->allspark->getCliActive();

        //get bawahan
        $competencyPeers = CompetencyPeers::model()->findAll('assessor = :assessor AND competency_type = :type AND competency_id = :cid', array(':assessor' => $id, ':type' => 1, ':cid' => $cli->id));
        $golonganPeers = array();
        $userPeers = array();
        foreach ($competencyPeers as $rowPeers):
            $golongan = WGolongan::model()->find(array(
                'join' => 'JOIN w_user_detail ON w_user_detail.golongan2 = t.nama',
                'condition' => 'w_user_detail.id_user = :id_user',
                'params' => array(':id_user' => $rowPeers->assessed),
            ));
            $golonganPeers[] = $golongan->id;
            $userPeers[] = $rowPeers->assessed;
        endforeach;
        $detailCriteria = new CDbCriteria();
        $detailCriteria->addInCondition('id_user', $userPeers);
        $detailPeers = WUserDetail::model()->findAll($detailCriteria);

        $criteriaCompetency = new CDbCriteria();
        $criteriaCompetency->with = array('category0');
        $criteriaCompetency->together = true;
        $criteriaCompetency->join = 'JOIN competency_task ON competency_task.competency_library_id = t.id';
        $criteriaCompetency->condition = 'category0.competency_type_id = :type AND competency_task.competency_id = :cid';
        $criteriaCompetency->params = array(':type' => 1, ':cid' => $cli->id);
        $criteriaCompetency->addInCondition('competency_task.golongan', $golonganPeers);
        $criteriaCompetency->order = 'category0.code ASC';
        $criteriaCompetency->group = 't.id';

        $competency = CompetencyLibrary::model()->findAll($criteriaCompetency);

        //echo '<pre>';
        //print_r($competency);

        $this->render('feedsoft', array(
            'competency' => $competency,
            'cli' => $cli,
            'competencyPeers' => $competencyPeers,
            'detailPeers' => $detailPeers,
        ));
    }

    public function actionAjaxFeedSoft() {
        //echo 'success';
        if ($_POST['level']):
            //cli aktif
            $cli = Yii::app()->allspark->getCliActive();
            $now = $dates = date('Y-m-d H:i:s');
            $transaction = Yii::app()->db->beginTransaction();
            try {
                foreach ($_POST['level'] as $rowAssessed => $valueAssessed):
                    //$assessed = $rowAssessed;
                    
                    foreach ($valueAssessed as $rowLevel => $valueLevel):
                        //cek data di database
                        $competencyResult = CompetencyResult::model()->find(array(
                            'condition' => 'assessor_id = :assessor AND assessed_id = :assessed AND competency_library_id = :library AND competency_id = :compActive',
                            'params' => array(
                                ':assessor' => Yii::app()->user->getId(),
                                ':assessed' => $rowAssessed,
                                ':library' => $rowLevel,
                                ':compActive' => $cli->id,
                            ),
                        ));
                        if (count($competencyResult) == 0):
                            //$
                            $competencyResult = new CompetencyResult;
                            $competencyResult->assessor_id = Yii::app()->user->getId();
                            $competencyResult->assessed_id = $rowAssessed;
                            $competencyResult->competency_library_id = $rowLevel;
                            $competencyResult->level = $valueLevel;
                            $competencyResult->created = $now;
                            $competencyResult->competency_id = $cli->id;
                            if (!$competencyResult->save()) :
                                //print_r($competencyResult->errors);
                                throw new Exception('Error saving');
                            endif;
                        else:
                            //echo 'success';
                            $competencyResult->level = $valueLevel;
                            $competencyResult->modified = $now;
                            if (!$competencyResult->save()) :
                                //print_r($competencyResult->errors);
                                throw new Exception('Error saving');
                            endif;
                        endif;
                    endforeach;
                endforeach;
                $transaction->commit();
                echo 'success';
            } catch (Exception $e) {
                $transaction->rollBack();
                //Yii::app()->user->setFlash('error', "{$e->getMessage()}");
                //$this->refresh();
                print_r($competencyResult->errors);
                var_dump($e->getMessage());
            }
            
        else:
            echo 'error';
        endif;
    }
    
    public function actionFeedBisnis() {
        //get user id
        $id = Yii::app()->user->Id;

        //get user golongan
        //$strata = Yii::app()->allspark->getEmpStrata();

        //get tahun cli
        $cli = Yii::app()->allspark->getCliActive();

        //get bawahan
        $competencyPeers = CompetencyPeers::model()->findAll('assessor = :assessor AND competency_type = :type AND competency_id = :cid', array(':assessor' => $id, ':type' => 1, ':cid' => $cli->id));
        $strataPeers = array();
        $userPeers = array();
        foreach ($competencyPeers as $rowPeers):
            $strata = WStrata::model()->find(array(
                'join' => 'JOIN w_user_detail ON w_user_detail.golongan = t.nama',
                'condition' => 'w_user_detail.id_user = :id_user',
                'params' => array(':id_user' => $rowPeers->assessed),
            ));
            $strataPeers[] = $strata->id;
            $userPeers[] = $rowPeers->assessed;
        endforeach;
        $detailCriteria = new CDbCriteria();
        $detailCriteria->addInCondition('id_user', $userPeers);
        $detailPeers = WUserDetail::model()->findAll($detailCriteria);

        $criteriaCompetency = new CDbCriteria();
        $criteriaCompetency->with = array('category0');
        $criteriaCompetency->together = true;
        $criteriaCompetency->join = 'JOIN competency_task ON competency_task.competency_library_id = t.id';
        $criteriaCompetency->condition = 'category0.competency_type_id = :type AND competency_task.competency_id = :cid';
        $criteriaCompetency->params = array(':type' => 2, ':cid' => $cli->id);
        $criteriaCompetency->addInCondition('competency_task.strata', $strataPeers);
        $criteriaCompetency->order = 'category0.code ASC';
        $criteriaCompetency->group = 't.id';

        $competency = CompetencyLibrary::model()->findAll($criteriaCompetency);

        //echo '<pre>';
        //print_r($strataPeers);
        

        $this->render('feedbisnis', array(
            'competency' => $competency,
            'cli' => $cli,
            'competencyPeers' => $competencyPeers,
            'detailPeers' => $detailPeers,
        ));
    }
    
    public function actionFeedManagerial() {
        //get user id
        $id = Yii::app()->user->Id;

        //get user golongan
        //$strata = Yii::app()->allspark->getEmpStrata();

        //get tahun cli
        $cli = Yii::app()->allspark->getCliActive();

        //get bawahan
        $competencyPeers = CompetencyPeers::model()->findAll('assessor = :assessor AND competency_type = :type AND competency_id = :cid', array(':assessor' => $id, ':type' => 1, ':cid' => $cli->id));
        $jabatanPeers = array();
        $userPeers = array();
        foreach ($competencyPeers as $rowPeers):
            $jabatan = Yii::app()->allspark->getEmpJabatan($rowPeers->assessed);
            $jabatanPeers[] = $jabatan->id;
            $userPeers[] = $rowPeers->assessed;
        endforeach;
        $detailCriteria = new CDbCriteria();
        $detailCriteria->addInCondition('id_user', $userPeers);
        $detailPeers = WUserDetail::model()->findAll($detailCriteria);

        $criteriaCompetency = new CDbCriteria();
        $criteriaCompetency->with = array('category0');
        $criteriaCompetency->together = true;
        $criteriaCompetency->join = 'JOIN competency_task ON competency_task.competency_library_id = t.id';
        $criteriaCompetency->condition = 'category0.competency_type_id = :type AND competency_task.competency_id = :cid';
        $criteriaCompetency->params = array(':type' => 3, ':cid' => $cli->id);
        $criteriaCompetency->addInCondition('competency_task.occupation', $strataPeers);
        $criteriaCompetency->order = 'category0.code ASC';
        $criteriaCompetency->group = 't.id';

        $competency = CompetencyLibrary::model()->findAll($criteriaCompetency);

        //echo '<pre>';
        //print_r($strataPeers);
        

        $this->render('feedbisnis', array(
            'competency' => $competency,
            'cli' => $cli,
            'competencyPeers' => $competencyPeers,
            'detailPeers' => $detailPeers,
        ));
    }

}
