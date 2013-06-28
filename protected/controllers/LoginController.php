<?php

class LoginController extends Controller {

    public function actionIndex() {
        //login Form Processing
        if (strpos(Yii::app()->user->returnUrl, 'admin') !== false) {
            $this->layout = 'admin_login';
        }

        $this->render('index', array('form' => form));
    }

}