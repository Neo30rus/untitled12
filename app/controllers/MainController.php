<?php

namespace app\controllers;
use app\core\initController;
class MainController extends initController
{
    public function actionIndex(){
        $this -> render('index');
    }
}