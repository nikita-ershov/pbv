<?php

namespace app\controllers;

use app\models\Content;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

use yii\filters\VerbFilter;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;


class AdminController extends Controller
{
    var $layout = 'admin';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionContentEdit($id) {
        $this->layout = 'content-edit';

        $model = Content::findOne($id);

        if (empty($model)) {
            throw new NotFoundHttpException();
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('content-edit-success');

            return $this->refresh();
        }

        return $this->render('content-edit', [
            'model' => $model
        ]);
    }
}
