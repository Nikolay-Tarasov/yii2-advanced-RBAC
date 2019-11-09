<?php
namespace backend\modules\admin\controllers;

use Yii;

/**
 * DefaultController
 *
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 * @since 1.0
 */
class DefaultController extends \yii\web\Controller
{
    public $layout = 'main.php';
    /**
     * Action index
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
