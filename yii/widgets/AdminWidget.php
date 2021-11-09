<?php
namespace app\widgets;

use yii\base\Widget;
use Yii;

class AdminWidget extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->render('admin');
        }
    }
}