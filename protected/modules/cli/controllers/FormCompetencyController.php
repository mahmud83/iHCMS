<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class FormCompetencyController extends Controller {

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

    public function actionBisnis() {
        //$strata = new CActiveDataProvider('WStrata');
        $strata = new WStrata('search');
        $strata->unsetAttributes();  // clear any default values
        if (isset($_GET['WStrata']))
            $strata->attributes = $_GET['WStrata'];
        
        $this->render('bisnis', array(
            'strata' => $strata,
        ));
    }

    public function actionSetBisnis($id = null) {
        if ($id == null):
            $this->redirect('bisnis');
        endif;

        $strata = WStrata::model()->find(array(
            'condition' => 'id = :id',
            'params' => array(':id' => $id),
        ));

        $this->render('setbisnis', array(
            'strata' => $strata,
        ));
    }

    public function actionAjaxBisnis() {
        if (isset($_POST['setbisnis'])):
            $data = array();
            $data['data']['tahun'] = $_POST['setbisnis']['tahun'];
            $data['data']['strata'] = $_POST['setbisnis']['strata'];

            //$pilihan = 3;
            $pilihan = $_POST['setbisnis']['input'];

            if ($pilihan == 1) {
                if (isset($_POST['setbisnis']['tahunkompetensi'])):
                    $tahunKompetensi = $_POST['setbisnis']['tahunkompetensi'];
                    $strata = $_POST['setbisnis']['strata'];

                    $criteria = new CDbCriteria();
                    //$criteria->together = true;
                    //$criteria->with = array('competencyTasks');
                    $criteria->join = 'LEFT JOIN competency_task ON t.id = competency_task.competency_library_id';
                    $criteria->condition = 'competency_task.tahun = :tahun AND competency_task.strata = :strata';
                    $criteria->params = array(':tahun' => $tahunKompetensi, ':strata' => $strata);
                    $criteria->order = 't.code ASC';
                    $data['listCompetency'] = CompetencyLibrary::model()->findAll($criteria);

                    $this->renderPartial('_ajaxbisnis', $data, false, true);
                endif;
            }
            elseif ($pilihan == 2) {
                $tahun = $_POST['setbisnis']['tahun'];
                $strataLain = $_POST['setbisnis']['stratalain'];

                $criteria = new CDbCriteria();
                //$criteria->together = true;
                //$criteria->with = array('competencyTasks');
                $criteria->join = 'LEFT JOIN competency_task ON t.id = competency_task.competency_library_id';
                $criteria->condition = 'competency_task.tahun = :tahun AND competency_task.strata = :strata';
                $criteria->params = array(':tahun' => $tahun, ':golongan' => $strataLain);
                $criteria->order = 't.code ASC';
                $data['listCompetency'] = CompetencyLibrary::model()->findAll($criteria);

                $this->renderPartial('_ajaxbisnis', $data, false, true);
            } elseif ($pilihan == 3) {
                $kompetensi = $_POST['setbisnis']['kompetensi'];

                $criteria = new CDbCriteria();
                $criteria->together = true;
                $criteria->with = array('category0');
                $criteria->condition = 'category0.competency_type_id = :type';
                $criteria->params = array(':type' => '2');
                $criteria->addInCondition('category0.id', $kompetensi);
                $criteria->order = 't.code ASC';
                $data['listCompetency'] = CompetencyLibrary::model()->findAll($criteria);

                $this->renderPartial('_ajaxbisnis', $data, false, true);
            } else {
                return false;
            }

        endif;
    }
    
    public function actionSubmitBisnis() {
        if (isset($_POST['detail'])):
            $i = 0;
            $transaction = Yii::app()->db->beginTransaction();
            try {
                $comp = $_POST['detail']['competency'];
                $cli = Yii::app()->allspark->getCliActive();
                //echo '<pre>';
                //print_r($comp);
                //exit();
                if (count($comp) > 0):
                    foreach ($comp as $rowCompetency):
                        $competency = new CompetencyTask();
                        $competency->tahun = $_POST['detail']['tahun'];
                        $competency->strata = $_POST['detail']['strata'];
                        $competency->competency_library_id = $rowCompetency['id'];
                        $competency->rcl = $rowCompetency['rcl'];
                        $competency->itj = $rowCompetency['itj'];
                        $competency->competency_id = $cli->id;
                        //echo '<pre>';
                        //print_r($competency->attributes);
                        //exit();
                        //$competency->save();
                        if (!$competency->save(false, null))
                            throw new Exception('Error saving');
                    endforeach;
                    $transaction->commit();
                    echo 'success';
                endif;
            } catch (Exception $e) {
                $transaction->rollBack();
                //Yii::app()->user->setFlash('error', "{$e->getMessage()}");
                //$this->refresh();
                var_dump($e->getMessage());
            }

        endif;
    }

    public function actionManagerial() {
        //$jabatan = new CActiveDataProvider('WJabatan');
        $jabatan = new WJabatan('search');
        $jabatan->unsetAttributes();  // clear any default values
        if (isset($_GET['WJabatan']))
            $jabatan->attributes = $_GET['WJabatan'];
        $this->render('managerial', array(
            'jabatan' => $jabatan,
        ));
    }
    
    public function actionSetManagerial($id = null) {
        if ($id == null):
            $this->redirect('managerial');
        endif;

        $jabatan = WJabatan::model()->find(array(
            'condition' => 'id = :id',
            'params' => array(':id' => $id),
        ));

        $this->render('setmanagerial', array(
            'jabatan' => $jabatan,
        ));
    }
    
    public function actionAjaxManagerial() {
        //echo 'hae';
        if (isset($_POST['setmanagerial'])):
            $data = array();
            $data['data']['tahun'] = $_POST['setmanagerial']['tahun'];
            $data['data']['jabatan'] = $_POST['setmanagerial']['jabatan'];
            //$data["myValue"] = $_POST['setsoft']['kompetensi'];
            $pilihan = $_POST['setmanagerial']['input'];
            //$pilihan = 3;
            if ($pilihan == 1) {
                if (isset($_POST['setmanagerial']['tahunkompetensi'])):
                    $tahunKompetensi = $_POST['setmanagerial']['tahunkompetensi'];
                    $jabatan = $_POST['setmanagerial']['jabatan'];

                    $criteria = new CDbCriteria();
                    //$criteria->together = true;
                    //$criteria->with = array('competencyTasks');
                    $criteria->join = 'LEFT JOIN competency_task ON t.id = competency_task.competency_library_id';
                    $criteria->condition = 'competency_task.tahun = :tahun AND competency_task.occupation = :occupation';
                    $criteria->params = array(':tahun' => $tahunKompetensi, ':occupation' => $golongan);
                    $criteria->order = 't.code ASC';
                    $data['listCompetency'] = CompetencyLibrary::model()->findAll($criteria);

                    $this->renderPartial('_ajaxmanagerial', $data, false, true);
                endif;
            }
            elseif ($pilihan == 2) {
                $tahun = $_POST['setmanagerial']['tahun'];
                $golonganLain = $_POST['setmanagerial']['jabatanlain'];

                $criteria = new CDbCriteria();
                //$criteria->together = true;
                //$criteria->with = array('competencyTasks');
                $criteria->join = 'LEFT JOIN competency_task ON t.id = competency_task.competency_library_id';
                $criteria->condition = 'competency_task.tahun = :tahun AND competency_task.occupation = :occupation';
                $criteria->params = array(':tahun' => $tahun, ':occupation' => $golonganLain);
                $criteria->order = 't.code ASC';
                $data['listCompetency'] = CompetencyLibrary::model()->findAll($criteria);

                $this->renderPartial('_ajaxmanagerial', $data, false, true);
            } elseif ($pilihan == 3) {
                $kompetensi = $_POST['setmanagerial']['kompetensi'];
                //$kompetensi = array('6', '9');

                $criteria = new CDbCriteria();
                $criteria->together = true;
                $criteria->with = array('category0');
                $criteria->condition = 'category0.competency_type_id = :type';
                $criteria->params = array(':type' => '3');
                $criteria->addInCondition('category0.id', $kompetensi);
                $criteria->order = 't.code ASC';
                $data['listCompetency'] = CompetencyLibrary::model()->findAll($criteria);

                $this->renderPartial('_ajaxmanagerial', $data, false, true);
            } else {
                return false;
            }

        endif;
    }
    
    public function actionSubmitManagerial() {
        if (isset($_POST['detail'])):
            //echo '<pre>';
            //print_r($_POST['detail']);
            //exit();
            $i = 0;
            $transaction = Yii::app()->db->beginTransaction();
            try {
                $comp = $_POST['detail']['competency'];
                $cli = Yii::app()->allspark->getCliActive();
                //echo '<pre>';
                //print_r($comp);
                //exit();
                if (count($comp) > 0):
                    foreach ($comp as $rowCompetency):
                        $competency = new CompetencyTask();
                        $competency->tahun = $_POST['detail']['tahun'];
                        $competency->occupation = $_POST['detail']['jabatan'];
                        $competency->competency_library_id = $rowCompetency['id'];
                        $competency->rcl = $rowCompetency['rcl'];
                        $competency->itj = $rowCompetency['itj'];
                        $competency->competency_id = $cli->id;
                        //echo '<pre>';
                        //print_r($competency->attributes);
                        //exit();
                        //$competency->save();
                        if (!$competency->save(false, null))
                            throw new Exception('Error saving');
                    endforeach;
                    $transaction->commit();
                    echo 'success';
                endif;
            } catch (Exception $e) {
                $transaction->rollBack();
                //Yii::app()->user->setFlash('error', "{$e->getMessage()}");
                //$this->refresh();
                var_dump($e->getMessage());
            }

        endif;
    }

    public function actionSoft() {
        //$golongan = new CActiveDataProvider('WGolongan');
        $golongan = new WGolongan('search');
        $golongan->unsetAttributes();  // clear any default values
        if (isset($_GET['WGolongan']))
            $golongan->attributes = $_GET['WGolongan'];
        
        $this->render('soft', array(
            'golongan' => $golongan,
        ));
    }

    public function actionSetSoft($id = null) {
        if ($id == null):
            $this->redirect('soft');
        endif;

        $golongan = WGolongan::model()->find(array(
            'condition' => 'id = :id',
            'params' => array(':id' => $id),
        ));

        $this->render('setsoft', array(
            'golongan' => $golongan,
        ));
    }

    public function actionAjaxSoft() {
        //echo 'hae';
        if (isset($_POST['setsoft'])):
            $data = array();
            $data['data']['tahun'] = $_POST['setsoft']['tahun'];
            $data['data']['golongan'] = $_POST['setsoft']['golongan'];
            //$data["myValue"] = $_POST['setsoft']['kompetensi'];
            $pilihan = $_POST['setsoft']['input'];
            //$pilihan = 3;
            if ($pilihan == 1) {
                if (isset($_POST['setsoft']['tahunkompetensi'])):
                    $tahunKompetensi = $_POST['setsoft']['tahunkompetensi'];
                    $golongan = $_POST['setsoft']['golongan'];

                    $criteria = new CDbCriteria();
                    //$criteria->together = true;
                    //$criteria->with = array('competencyTasks');
                    $criteria->join = 'LEFT JOIN competency_task ON t.id = competency_task.competency_library_id';
                    $criteria->condition = 'competency_task.tahun = :tahun AND competency_task.golongan = :golongan';
                    $criteria->params = array(':tahun' => $tahunKompetensi, ':golongan' => $golongan);
                    $criteria->order = 't.code ASC';
                    $data['listCompetency'] = CompetencyLibrary::model()->findAll($criteria);

                    $this->renderPartial('_ajaxsoft', $data, false, true);
                endif;
            }
            elseif ($pilihan == 2) {
                $tahun = $_POST['setsoft']['tahun'];
                $golonganLain = $_POST['setsoft']['golonganlain'];

                $criteria = new CDbCriteria();
                //$criteria->with = array('competencyTasks');
                $criteria->join = 'LEFT JOIN competency_task ON t.id = competency_task.competency_library_id';
                //$criteria->together = true;
                $criteria->condition = 'competency_task.tahun = :tahun AND competency_task.golongan = :golongan';
                $criteria->params = array(':tahun' => $tahun, ':golongan' => $golonganLain);
                $criteria->order = 't.code ASC';
                $data['listCompetency'] = CompetencyLibrary::model()->findAll($criteria);
                
                $this->renderPartial('_ajaxsoft', $data, false, true);
            } elseif ($pilihan == 3) {
                $kompetensi = $_POST['setsoft']['kompetensi'];
                //$kompetensi = array('6', '9');

                $criteria = new CDbCriteria();
                $criteria->together = true;
                $criteria->with = array('category0');
                $criteria->condition = 'category0.competency_type_id = :type';
                $criteria->params = array(':type' => '1');
                $criteria->addInCondition('category0.id', $kompetensi);
                $criteria->order = 't.code ASC';
                $data['listCompetency'] = CompetencyLibrary::model()->findAll($criteria);

                $this->renderPartial('_ajaxsoft', $data, false, true);
            } else {
                return false;
            }

        endif;
    }

    public function actionSubmitSoft() {
        if (isset($_POST['detail'])):
            //echo '<pre>';
            //print_r($_POST['detail']);
            //exit();
            $i = 0;
            $transaction = Yii::app()->db->beginTransaction();
            try {
                $comp = $_POST['detail']['competency'];
                $cli = Yii::app()->allspark->getCliActive();
                //echo '<pre>';
                //print_r($comp);
                //exit();
                if (count($comp) > 0):
                    foreach ($comp as $rowCompetency):
                        $competency = new CompetencyTask();
                        $competency->tahun = $_POST['detail']['tahun'];
                        $competency->golongan = $_POST['detail']['golongan'];
                        $competency->competency_library_id = $rowCompetency['id'];
                        $competency->rcl = $rowCompetency['rcl'];
                        $competency->itj = $rowCompetency['itj'];
                        $competency->competency_id = $cli->id;
                        //echo '<pre>';
                        //print_r($competency->attributes);
                        //exit();
                        //$competency->save();
                        if (!$competency->save(false, null))
                            throw new Exception('Error saving');
                    endforeach;
                    $transaction->commit();
                    echo 'success';
                endif;
            } catch (Exception $e) {
                $transaction->rollBack();
                //Yii::app()->user->setFlash('error', "{$e->getMessage()}");
                //$this->refresh();
                var_dump($e->getMessage());
            }

        endif;
    }

    public function actionDashboard() {
        $model = new WJabatan('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['WJabatan']))
            $model->attributes = $_GET['WJabatan'];

        $this->render('dashboard', array(
            'model' => $model,
        ));
    }

    public function actionGenerator() {
        $this->render('generator');
    }
    
    public function actionItjSoft() {
        $jabatan = new WJabatan('search');
        $jabatan->unsetAttributes();  // clear any default values
        if (isset($_GET['WJabatan']))
            $jabatan->attributes = $_GET['Wjabatan'];
        
        $this->render('itjsoft', array(
            'jabatan' => $jabatan,
        ));
    }
    
    public function actionSetItjSoft($id=null) {
        if ($id == null):
            $this->redirect('soft');
        endif;

        $jabatan = WJabatan::model()->find(array(
            'condition' => 'id = :id',
            'params' => array(':id' => $id),
        ));

        $this->render('setitjsoft', array(
            'jabatan' => $jabatan,
        ));
    }
    
    public function actionAjaxItjSoft() {
        //echo 'hae';
        if (isset($_POST['setitjsoft'])):
            $data = array();
            $data['data']['tahun'] = $_POST['setsoft']['tahun'];
            $data['data']['jabatan'] = $_POST['setitjsoft']['jabatan'];
            //$data["myValue"] = $_POST['setsoft']['kompetensi'];
            $pilihan = $_POST['setitjsoft']['input'];
            //$pilihan = 3;
            if ($pilihan == 1) {
                if (isset($_POST['setitjsoft']['tahunkompetensi'])):
                    $tahunKompetensi = $_POST['setitjsoft']['tahunkompetensi'];
                    $jabatan = $_POST['setitjsoft']['jabatan'];

                    $criteria = new CDbCriteria();
                    //$criteria->together = true;
                    //$criteria->with = array('competencyTasks');
                    $criteria->join = 'LEFT JOIN competency_task ON t.id = competency_task.competency_library_id';
                    $criteria->condition = 'competency_task.tahun = :tahun AND competency_task.occupation = :jabatan';
                    $criteria->params = array(':tahun' => $tahunKompetensi, ':jabatan' => $jabatan);
                    $criteria->order = 't.code ASC';
                    $data['listCompetency'] = CompetencyLibrary::model()->findAll($criteria);

                    $this->renderPartial('_ajaxitjsoft', $data, false, true);
                endif;
            }
            elseif ($pilihan == 2) {
                $tahun = $_POST['setitjsoft']['tahun'];
                $jabatanLain = $_POST['setitjsoft']['jabatanlain'];

                $criteria = new CDbCriteria();
                //$criteria->with = array('competencyTasks');
                $criteria->join = 'LEFT JOIN competency_task ON t.id = competency_task.competency_library_id';
                //$criteria->together = true;
                $criteria->condition = 'competency_task.tahun = :tahun AND competency_task.occupation = :jabatan';
                $criteria->params = array(':tahun' => $tahun, ':jabatan' => $jabatanLain);
                $criteria->order = 't.code ASC';
                $data['listCompetency'] = CompetencyLibrary::model()->findAll($criteria);
                
                $this->renderPartial('_ajaxitjsoft', $data, false, true);
            } elseif ($pilihan == 3) {
                $kompetensi = $_POST['setitjsoft']['kompetensi'];
                //$kompetensi = array('6', '9');

                $criteria = new CDbCriteria();
                $criteria->together = true;
                $criteria->with = array('category0');
                $criteria->condition = 'category0.competency_type_id = :type';
                $criteria->params = array(':type' => '1');
                $criteria->addInCondition('category0.id', $kompetensi);
                $criteria->order = 't.code ASC';
                $data['listCompetency'] = CompetencyLibrary::model()->findAll($criteria);

                $this->renderPartial('_ajaxitjsoft', $data, false, true);
            } else {
                return false;
            }

        endif;
    }

}
