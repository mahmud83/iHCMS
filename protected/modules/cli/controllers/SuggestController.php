<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class SuggestController extends Controller {

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
        $this->render('soft');
    }

    public function actionAjaxSoftPeers() {
        if (isset($_POST['userDetail'])) {
            $cli = Yii::app()->allspark->getCliActive();
            $userDetail = WUserDetail::model()->find('id = :id', array(':id' => $_POST['userDetail']));

            //cek jabatan user
            $jabatanUserCriteria = new CDbCriteria();
            $jabatanUserCriteria->with = array('idUser' => array(
                    'with' => array('userDetail'),
            ));
            $jabatanUserCriteria->together = true;
            $jabatanUserCriteria->condition = 'userDetail.id = :idUserDetail AND tgl_tmt <= :date';
            $jabatanUserCriteria->params = array(':idUserDetail' => $_POST['userDetail'], ':date' => date('Y-m-d'));
            $jabatanUserCriteria->order = 'tgl_tmt DESC';

            $jabatanUserResult = MutasiHistoryLama::model()->find($jabatanUserCriteria);
            //cek dari data mutasi ada atau tidak 
            if (count($jabatanUserResult) > 0):
                $jabatanUser = $jabatanUserResult->id_jab_baru;
            else:
                $jabatanUser = $userDetail->id_jabatan;
            endif;

            //cek atasan
            //$userDetail = WUserDetail::model()->find('id = :id', array(':id'=>$_POST['userDetail']));
            $atasanLangsung = $userDetail->idAtasan;

            //cek detail jabatan
            $detailJabatan = WJabatan::model()->find('id = :id', array(':id' => $jabatanUser));
            //cek peers di unit kerja yang setingkat
            $peers = WJabatan::model()->findAll('parent_id = :parent AND level = :level', array(':parent' => $detailJabatan->parent_id, ':level' => $detailJabatan->level));
            foreach ($peers as $rowPeers):
                $userPeers = WUserDetail::model()->find('id_jabatan = :jabatan', array(':jabatan' => $rowPeers->id));
                if ($userPeers->id != $userDetail->id):
                    $peersDetail[] = $userPeers;
                endif;
            endforeach;

            $this->renderPartial('_ajaxsoftpeers', array(
                'userDetail' => $userDetail,
                'jabatanUser' => $jabatanUser,
                'atasanLangsung' => $atasanLangsung,
                'peersDetail' => $peersDetail,
                'cli'=>$cli->id
            ), false, false);
        }
        else {
            echo 'error';
        }
    }

    public function actionAjaxSubmitSoftPeers() {
        //print_r($_POST);
        if (($_POST['dinilai']) && ($_POST['assessed'])):
            $transaction = Yii::app()->db->beginTransaction();
            try {
                $delete = Yii::app()->db->beginTransaction();
                $cli = Yii::app()->allspark->getCliActive();
                CompetencyPeers::model()->deleteAll(array(
                    'condition' => 'assessed = :assessed AND competency_id = :cid AND competency_type = :ctype',
                    'params' => array(
                        ':cid' => $cli->id,
                        ':assessed' => $_POST['assessed'],
                        ':ctype' => '1',
                    ),
                ));
                foreach ($_POST['dinilai'] as $row => $value):
                    //echo value = $value;
                    $competencyPeers = new CompetencyPeers;
                    $competencyPeers->assessed = $_POST['assessed'];
                    $competencyPeers->assessor = $row;
                    $competencyPeers->competency_id = $cli->id;
                    $competencyPeers->competency_type = '1';
                    $competencyPeers->status = $value;
                    if (!$competencyPeers->save())
                        throw new Exception("Error");
                endforeach;

                $transaction->commit();
                echo 'success';
            } catch (Exception $e) {
                $transaction->rollback();
                echo $e->getMessage();
                print_r($competencyPeers->errors);
            }
        else:
            echo 'error';
        endif;
    }

    public function actionHard() {
        $this->render('hard');
    }

    public function actionAjaxHardPeers() {
        if (isset($_POST['userDetail'])) {
            $cli = Yii::app()->allspark->getCliActive();
            $userDetail = WUserDetail::model()->find('id = :id', array(':id' => $_POST['userDetail']));

            //cek jabatan user
            $jabatanUserCriteria = new CDbCriteria();
            $jabatanUserCriteria->with = array('idUser' => array(
                    'with' => array('userDetail'),
            ));
            $jabatanUserCriteria->together = true;
            $jabatanUserCriteria->condition = 'userDetail.id = :idUserDetail AND tgl_tmt <= :date';
            $jabatanUserCriteria->params = array(':idUserDetail' => $_POST['userDetail'], ':date' => date('Y-m-d'));
            $jabatanUserCriteria->order = 'tgl_tmt DESC';

            $jabatanUserResult = MutasiHistoryLama::model()->find($jabatanUserCriteria);
            //cek dari data mutasi ada atau tidak 
            if (count($jabatanUserResult) > 0):
                $jabatanUser = $jabatanUserResult->id_jab_baru;
            else:
                $jabatanUser = $userDetail->id_jabatan;
            endif;
            
            //cek detail jabatan
            $detailJabatan = WJabatan::model()->find('id = :id', array(':id' => $jabatanUser));

            //cek atasan Langsung
            $atasanLangsung = WJabatan::model()->findAll(array(
                'condition' => 'id = :id',
                'params' => array(':id' => $detailJabatan->parent_id),
            ));
            foreach ($atasanLangsung as $rowAtasanLangsung):
                $detail = WUserDetail::model()->find('id_jabatan = :jabatan', array(':jabatan' => $rowAtasanLangsung->id));
                if ($detail->id != $userDetail->id):
                    $atasan[] = array(
                        'status' => 'atasan langsung',
                        'detail'=>$detail,
                    );
                    //cek atasanDuaTingkat
                    $atasanDuaTingkat = WJabatan::model()->findAll(array(
                        'condition' => 'id = :id',
                        'params' => array(':id' => $rowAtasanLangsung->parent_id),
                    ));
                    foreach ($atasanDuaTingkat as $rowAtasanDuaTingkat):
                        $detail = WUserDetail::model()->find('id_jabatan = :jabatan', array(':jabatan' => $rowAtasanDuaTingkat->id));
                        if ($detail->id != $userDetail->id):
                            $atasan[] = array(
                                'status' => 'atasan dua tingkat',
                                'detail'=>$detail,
                            );
                        endif;
                    endforeach;
                endif;
            endforeach;

            //cek bawahan
            /*
            $bawahanLangsung = WJabatan::model()->findAll(array(
                'condition' => 'parent_id = :parent',
                'params' => array(':parent' => $detailJabatan->id),
            ));
            foreach ($bawahanLangsung as $rowBawahanLangsung):
                $detail = WUserDetail::model()->find('id_jabatan = :jabatan', array(':jabatan' => $rowBawahanLangsung->id));
                if ($detail->id != $userDetail->id):
                    $bawahan[] = array(
                        'status' => 'bawahan langsung',
                        'detail'=>$detail,
                    );

                    //cek bawahan dua tingkat
                    $bawahanDuaTingkat = WJabatan::model()->findAll(array(
                        'condition' => 'parent_id = :parent',
                        'params' => array(':parent' => $detail->id_jabatan),
                    ));
                    foreach ($bawahanDuaTingkat as $rowBawahanDuaTingkat):
                        $detail = WUserDetail::model()->find('id_jabatan = :jabatan', array(':jabatan' => $rowBawahanDuaTingkat->id));
                        if ($detail->id != $userDetail->id):
                            $bawahan[] = array(
                                'status' => 'bawahan dua tingkat',
                                'detail'=>$detail,
                            );
                        endif;
                    endforeach;
                endif;
            endforeach;
             * 
             */

            $this->renderPartial('_ajaxhardpeers', array(
                'userDetail' => $userDetail,
                'jabatanUser' => $jabatanUser,
                'atasan' => $atasan,
                'cli'=>$cli,
                //'bawahan' => $bawahan,
                    ), false, false);
        }
        else {
            echo 'error';
        }
    }
    
    public function actionAjaxSubmitHardPeers() {
        //print_r($_POST);
        if (($_POST['dinilai']) && ($_POST['assessed'])):
            $transaction = Yii::app()->db->beginTransaction();
            try {
                $delete = Yii::app()->db->beginTransaction();
                $cli = Yii::app()->allspark->getCliActive();
                CompetencyPeers::model()->deleteAll(array(
                    'condition' => 'assessed = :assessed AND competency_id = :cid AND competency_type = :ctype',
                    'params' => array(
                        ':assessed' => $_POST['assessed'],
                        ':cid' => $cli->id,
                        ':ctype' => '2',
                    ),
                ));
                CompetencyPeers::model()->deleteAll(array(
                    'condition' => 'assessed = :assessed AND competency_id = :cid AND competency_type = :ctype',
                    'params' => array(
                        ':assessed' => $_POST['assessed'],
                        ':cid' => $cli->id,
                        ':ctype' => '3',
                    ),
                ));
                foreach ($_POST['dinilai'] as $row => $value):
                    //input peers bisnis
                    $businessPeers = new CompetencyPeers;
                    $businessPeers->assessed = $_POST['assessed'];
                    $businessPeers->assessor = $row;
                    //$businessPeers->year = $cliYears->year;
                    $businessPeers->competency_id = $cli->id;
                    $businessPeers->competency_type = '2';
                    $businessPeers->status = $value;
                    if (!$businessPeers->save())
                        throw new Exception("Error");
                    
                    //input peers managerial
                    $managerialPeers = new CompetencyPeers;
                    $managerialPeers->assessed = $_POST['assessed'];
                    $managerialPeers->assessor = $row;
                    //$managerialPeers->year = $cliYears->year;
                    $managerialPeers->competency_id = $cli->id;
                    $managerialPeers->competency_type = '3';
                    $managerialPeers->status = $value;
                    if (!$managerialPeers->save())
                        throw new Exception("Error");
                endforeach;

                $transaction->commit();
                echo 'success';
            } catch (Exception $e) {
                $transaction->rollback();
                echo $e->getMessage();
                if (isset($businessPeers->errors))
                    print_r($businessPeers->errors);
                if (isset($managerialPeers->errors))
                    print_r($managerialPeers->errors);
            }
        else:
            echo 'error';
        endif;
    }

}
