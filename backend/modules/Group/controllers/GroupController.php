<?php

namespace app\modules\Group\controllers;

use yii\web\Controller;

class GroupController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
