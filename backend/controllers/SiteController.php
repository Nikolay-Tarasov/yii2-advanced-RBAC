<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        if (!Yii::$app->user->isGuest) {
            debug(Yii::$app->user->identity);
            die;
        }
        return $this->render('index');
    }
}
