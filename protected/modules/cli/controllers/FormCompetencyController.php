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

    public function actionSoft() {
        $golongan = new CActiveDataProvider('WGolongan');

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
            //$pilihan = $_POST['setsoft']['input'];
            $pilihan = 3;
            if ($pilihan == 1) {
                if (isset($_POST['setsoft']['tahunkompetensi'])):
                    $tahunKompetensi = $_POST['setsoft']['tahunkompetensi'];
                    $golongan = $_POST['setsoft']['golongan'];

                    $criteria = new CDbCriteria();
                    $criteria->together = true;
                    $criteria->with = array('competencyTasks');
                    $criteria->condition = 'competencyTasks.tahun = :tahun AND competencyTasks.golongan = :golongan';
                    $criteria->params = array(':tahun' => $tahunKompetensi, ':golongan' => $golongan);
                    $criteria->order = 't.code ASC';
                    $data['listCompetency'] = CompetencyLibrary::model()->findAll($criteria);

                    $this->renderPartial('_ajaxsoft', $data, false, true);
                endif;
                /*
                  if (isset($_POST['setsoft']['tahunkompetensi'])):
                  $tahunKompetensi = $_POST['setsoft']['tahunkompetensi'];
                  $listCompetency = CompetencyTask::model()->findAll(array(
                  'condition'=>'tahun = :tahun AND golongan = :golongan',
                  'params'=>array(':tahun'=>$tahunKompetensi, ':golongan'=>$_POST['setsoft']['golongan']),
                  ));

                  if(count($listCompetency)>0):
                  $competencyTask = array();
                  $i = 0;
                  foreach($listCompetency as $rowCompetency):
                  $competencyTask[$i]['tahun'] = $_POST['setsoft']['tahun'];
                  $competencyTask[$i]['golongan'] = $_POST['setsoft']['golongan'];
                  $competencyTask[$i]['competency_library_id'] = $rowCompetency->id;
                  $competencyTask[$i]['rcl'];
                  endforeach;
                  endif;
                  endif;
                 * 
                 */
            }
            elseif ($pilihan == 2) {
                $tahun = $_POST['setsoft']['tahun'];
                $golonganLain = $_POST['setsoft']['golonganlain'];

                $criteria = new CDbCriteria();
                $criteria->together = true;
                $criteria->with = array('competencyTasks');
                $criteria->condition = 'competencyTasks.tahun = :tahun AND competencyTasks.golongan = :golongan';
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
                        //echo '<pre>';
                        //print_r($competency->attributes);
                        //exit();
                        //$competency->save();
                        if(!$competency->save(false, null))
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

}
