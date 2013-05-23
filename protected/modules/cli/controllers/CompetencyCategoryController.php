<?php

class CompetencyCategoryController extends Controller {

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

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new CompetencyCategory;

        // Comment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['CompetencyCategory'])) {
            $model->attributes = $_POST['CompetencyCategory'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Comment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['CompetencyCategory'])) {
            $model->attributes = $_POST['CompetencyCategory'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('CompetencyCategory');
        //$data = WModule::model()->findAll();
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new CompetencyCategory('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['CompetencyCategory']))
            $model->attributes = $_GET['CompetencyCategory'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = CompetencyCategory::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'competency-category-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionLookup() {
        //if (Yii::app()->request->isAjaxRequest && isset($_GET['term'])) {
        $models = CompetencyCategory::model()->suggestUsername($_GET['term']);

        $result = array();
        foreach ($models as $m)
            $result[] = array(
                'value' => '[' . $m->code . '] ' . $m->name . '',
                'id' => $m->id,
            );

        echo CJSON::encode($result);
        //}
    }

    public function actionGetDynamicType() {
        $data = CompetencyCategory::model()->findAll('competency_type_id=:competency_type_id', array(':competency_type_id' => (int) $_POST['competency_type_id']));

        $data = CHtml::listData($data, 'id', 'name');
        echo "<option value=''>Pilih Salah Satu</option>";
        foreach ($data as $value => $judul)
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($judul), true);
    }

}
