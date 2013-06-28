<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class DashboardController extends Controller {
    
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
    
    public function actionindex() {
        $cli = Yii::app()->allspark->getCliActive();
        $id = Yii::app()->user->Id;
        $golongan = Yii::app()->allspark->getEmpGolongan();
        $jabatan = Yii::app()->allspark->getEmpJabatan();
        $strata = Yii::app()->allspark->getEmpStrata();

        //cek jumlah kompetensi soft
        //get task
        /*
        $criteriaCompetency = new CDbCriteria();
        $criteriaCompetency->with = array('category0');
        $criteriaCompetency->together = true;
        $criteriaCompetency->join = 'JOIN competency_task ON competency_task.competency_library_id = t.id';
        $criteriaCompetency->condition = 'category0.competency_type_id = :type AND competency_task.golongan = :golongan AND competency_task.competency_id = :cid';
        $criteriaCompetency->params = array(':type' => 1, ':golongan' => $golongan->id, ':cid' => $cli->id);
        $criteriaCompetency->order = 'category0.code ASC';

        $competencySoft = CompetencyLibrary::model()->findAll($criteriaCompetency);
        
        //cek jumlah kompetensi bisnis
        $criteriaCompetency = new CDbCriteria();
        $criteriaCompetency->with = array('category0');
        $criteriaCompetency->together = true;
        $criteriaCompetency->join = 'JOIN competency_task ON competency_task.competency_library_id = t.id';
        $criteriaCompetency->condition = 'category0.competency_type_id = :type AND competency_task.strata = :strata AND competency_task.competency_id = :cid';
        $criteriaCompetency->params = array(':type' => 2, ':strata' => $strata->id, ':cid' => $cli->id);

        $competencyBisnis = CompetencyLibrary::model()->findAll($criteriaCompetency);
        
        
        //cek jumlah kompetensi managerial
        $criteriaCompetency = new CDbCriteria();
        $criteriaCompetency->with = array('category0');
        $criteriaCompetency->together = true;
        $criteriaCompetency->join = 'JOIN competency_task ON competency_task.competency_library_id = t.id';
        $criteriaCompetency->condition = 'category0.competency_type_id = :type AND competency_task.occupation = :jabatan AND competency_task.competency_id = :cid';
        $criteriaCompetency->params = array(':type' => 3, ':jabatan' => $jabatan->id, ':cid' => $cli->id);

        $competencyManajerial = CompetencyLibrary::model()->findAll($criteriaCompetency);
         * 
         */
        
        //cek jawaban kompetensi
        $listSoft = CompetencyCategory::model()->findAll(array(
            //'with'=>array('competencyLibraries'),
            //'together'=>true,
            'join'=>'JOIN competency_library ON competency_library.category = t.id JOIN competency_task ON competency_task.competency_library_id = competency_library.id',
            //'condition'=>'competencyTasks.golongan = :golongan AND competencyTasks.competency_id = :cid AND t.competency_type_id = :type',
            'condition'=>'competency_task.golongan = :golongan AND competency_task.competency_id = :cid AND t.competency_type_id = :type',
            'params'=>array(
                ':golongan'=>$golongan->id,
                ':cid'=>$cli->id,
                ':type'=>1,
            ),
            'order'=>'t.code ASC',
            'group'=>'t.id'
        ));
        
        $listBisnis = CompetencyCategory::model()->findAll(array(
            //'with'=>array('competencyLibraries'),
            //'together'=>true,
            'join'=>'JOIN competency_library ON competency_library.category = t.id JOIN competency_task ON competency_task.competency_library_id = competency_library.id',
            //'join'=>'JOIN competency_task ON competency_task.competency_library_id = competencyLibraries.id',
            //'condition'=>'competencyTasks.golongan = :golongan AND competencyTasks.competency_id = :cid AND t.competency_type_id = :type',
            'condition'=>'competency_task.strata = :strata AND competency_task.competency_id = :cid AND t.competency_type_id = :type',
            'params'=>array(
                ':strata'=>$strata->id,
                ':cid'=>$cli->id,
                ':type'=>2,
            ),
            'order'=>'t.code ASC',
        ));
        
        $listManajerial = CompetencyCategory::model()->findAll(array(
            //'with'=>array('competencyLibraries'),
            //'together'=>true,
            'join'=>'JOIN competency_library ON competency_library.category = t.id JOIN competency_task ON competency_task.competency_library_id = competency_library.id',
            //'join'=>'JOIN competency_task ON competency_task.competency_library_id = competencyLibraries.id',
            //'condition'=>'competencyTasks.golongan = :golongan AND competencyTasks.competency_id = :cid AND t.competency_type_id = :type',
            'condition'=>'competency_task.occupation = :occupation AND competency_task.competency_id = :cid AND t.competency_type_id = :type',
            'params'=>array(
                ':occupation'=>$occupation->id,
                ':cid'=>$cli->id,
                ':type'=>3,
            ),
            'order'=>'t.code ASC',
        ));
        
        $this->render('index', array(
            //'competencySoft'=>$competencySoft,
            //'competencyBisnis'=>$competencyBisnis,
            //'competencyManajerial'=>$competencyManajerial,
            'golongan'=>$golongan,
            'strata'=>$strata,
            'jabatan'=>$jabatan,
            'listSoft'=>$listSoft,
            'listBisnis'=>$listBisnis,
            'listManajerial'=>$listManajerial,
            //'resultSoft'=>$resultSoft,
        ));
    }
    
    public function actionDetailSoft() {
        echo 'hae';
    }
}
