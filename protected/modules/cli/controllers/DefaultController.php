<?php

class DefaultController extends Controller {

    public $layout = '//layouts/NMain';
    
    public function actionIndex() {
        $this->render('index');
    }

}