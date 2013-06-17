<?php

class SettingController extends Controller {

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
        $this->render('index');
    }

    public function actionAktivasi() {
        //model competency
        $comp = new Competency;

        if (isset($_POST['Competency'])) {

            //print_r($_POST['Competency']);
            //exit();
            $year = str_replace(' ', '', $_POST['Competency']['year']);
            $comp->year = $year;
            $comp->start = $_POST['Competency']['start'];
            $comp->end = $_POST['Competency']['end'];

            //$_POST = array_filter($_POST);
            //print_r($model->attributes);
            //exit();
            if (!$comp->save()):
                $error = $comp->getErrors();
            else:
                $message = 'data berhasil disimpan';
            endif;
            //exit();
            //print_r($_POST['Competency']);
            //exit();
        }

        //get list cli
        $cliCriteria = new CDbCriteria();
        $cliCriteria->order = 'year DESC';

        $cliList = new CActiveDataProvider('Competency', array('criteria' => $cliCriteria));


        $this->render('aktivasi', array(
            'cliList' => $cliList,
            'model' => $comp,
            'message' => $message,
            'error' => $error
        ));
    }

    public function loadModel($name) {
        //$model=WPreference::model()->findByPk($id);

        $criteria = new CDbCriteria;
        $criteria->select = 'value as ' . $name . ', value, name, id';
        $criteria->condition = 'name=:name';
        $criteria->params = array(':name' => $name);
        $model = WPreference::model()->find($criteria);

        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    public function actionGiveTask() {
        $competencyCategory = new CompetencyCategory;

        $this->render('givetask', array(
            'competencyCategory' => $competencyCategory,
        ));
    }

    public function actionPeers() {
        $this->render('peers');
    }

    public function actionAjaxSoftPeers() {
        if (isset($_POST['userDetail'])) {
            $cli = Yii::app()->allspark->getCliActive();
            $userDetail = WUserDetail::model()->find('id = :id', array(':id' => $_POST['userDetail']));

            $var['detail_nik'] = $userDetail->nik;
            $var['detail_nama'] = $userDetail->nama;

            $jabatanDetail = WJabatan::model()->find('id = :id', array(':id' => $userDetail->id_jabatan));
            $var['detail_jab'] = $jabatanDetail->nama;

            $var['message'] = 'success';
            echo CJSON::encode($var);
        } else {
            echo CJSON::encode(array('message' => 'error'));
        }
    }

    public function actionAjaxDetailKaryawan() {
        if (isset($_POST['penilaiId'])) {
            $cli = Yii::app()->allspark->getCliActive();
            $userDetail = WUserDetail::model()->find('id = :id', array(':id' => $_POST['penilaiId']));

            $var['detail_nik'] = $userDetail->nik;
            $var['detail_nama'] = $userDetail->nama;
            $var['user_id'] = $userDetail->id_user;

            $jabatanDetail = WJabatan::model()->find('id = :id', array(':id' => $userDetail->id_jabatan));
            $var['detail_jab'] = $jabatanDetail->nama;

            $var['message'] = 'success';
            echo CJSON::encode($var);
        } else {
            echo CJSON::encode(array('message' => 'error'));
        }
    }

    public function actionAjaxSubmitPeers() {
        if ((isset($_POST['penilaisoft'])) && (isset($_POST['penilaihard']))) {
            $transaction = Yii::app()->db->beginTransaction();
            try {
                $delete = Yii::app()->db->beginTransaction();
                $cli = Yii::app()->allspark->getCliActive();
                if (!CompetencyPeers::model()->deleteAll(array(
                            'condition' => 'assessed = :assessed AND competency_id = :cid AND competency_type = :ctype',
                            'params' => array(
                                ':cid' => $cli->id,
                                ':assessed' => $_POST['user_id'],
                                ':ctype' => '1',
                            ),
                        )))
                    throw new Exception("Error");
                
                foreach ($_POST['penilaisoft'] as $rowSoft => $valueSoft):
                    //echo value = $value;
                    $competencySoft = new CompetencyPeers;
                    $competencySoft->assessed = $_POST['userDetail'];
                    $competencySoft->assessor = $valueSoft;
                    $competencySoft->competency_id = $cli->id;
                    $competencySoft->competency_type = '1';
                    //$competencyPeers->status = $value;
                    if (!$competencySoft->save())
                        throw new Exception("Error");
                endforeach;

                foreach ($_POST['penilaihard'] as $rowBisnis => $valueBisnis):
                    //echo value = $value;
                    $competencyBisnis = new CompetencyPeers;
                    $competencyBisnis->assessed = $_POST['userDetail'];
                    $competencyBisnis->assessor = $value;
                    $competencyBisnis->competency_id = $cli->id;
                    $competencyBisnis->competency_type = '2';
                    //$competencyPeers->status = $value;
                    if (!$competencyBisnis->save())
                        throw new Exception("Error");
                endforeach;

                foreach ($_POST['penilaihard'] as $rowManajerial => $valueManajerial):
                    //echo value = $value;
                    $competencyManajerial = new CompetencyPeers;
                    $competencyManajerial->assessed = $_POST['userDetail'];
                    $competencyManajerial->assessor = $value;
                    $competencyManajerial->competency_id = $cli->id;
                    $competencyManajerial->competency_type = '3';
                    //$competencyPeers->status = $value;
                    if (!$competencyManajerial->save())
                        throw new Exception("Error");
                endforeach;

                $transaction->commit();
                //echo 'success';
                $var['message'] = 'success';
                echo CJSON::encode($var);
            } catch (Exception $e) {
                $transaction->rollback();
                echo CJSON::encode(array('message' => 'error', 'detail'=>'gagal cuy'));
                //$var['message'] = 'error ';
                //$var['detail'] = 'gagal memasukkan ke dalam database';
                //echo $e->getMessage();
                //print_r($competencyPeers->errors);
            }

            echo CJSON::encode($var);
        } else {
            echo CJSON::encode(array('message' => 'error'));
        }
    }

    public function actionHardPeers() {
        $this->render('hardPeers');
    }

}