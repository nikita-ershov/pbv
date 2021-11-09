<?php

namespace app\controllers;

use app\models\Feedback;
use app\models\FeedbackCommerce;
use app\models\News;
use app\models\Products;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\widgets\ActiveForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
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
        $this->layout = 'pbv';
        $commerceModel = new FeedbackCommerce();
        $feedbackModel = new Feedback();
        return $this->render('pbv', [
            'commerceModel' => $commerceModel,
            'feedbackModel' => $feedbackModel,
        ]);
    }
    /*
    public function actionUdk()
    {
        $this->layout = 'udk';
        $commerceModel = new FeedbackCommerce();
        $feedbackModel = new Feedback();
        return $this->render('udk', [
            'commerceModel' => $commerceModel,
            'feedbackModel' => $feedbackModel,
        ]);
    }

    public function actionPbv()
    {
        $this->layout = 'pbv';
        $commerceModel = new FeedbackCommerce();
        $feedbackModel = new Feedback();
        return $this->render('pbv', [
            'commerceModel' => $commerceModel,
            'feedbackModel' => $feedbackModel,
        ]);
    }
    */
    public function actionProduct($id)
    {
        $this->layout = 'pbv';
        $commerceModel = new FeedbackCommerce();
        $feedbackModel = new Feedback();

        $product = Products::findOne(['id' => $id]);
        return $this->render('product', [
            'product'       => $product,
            'commerceModel' => $commerceModel,
            'feedbackModel' => $feedbackModel,
        ]);
    }


    public function actionNews($id) {
        $model = News::findOne($id);

        if (empty($model)) {
            throw new NotFoundHttpException();
        }

        return $this->renderPartial('news', [
            'model' => $model
        ]);
    }

    public function actionFormCommerce() {
        $model = new FeedbackCommerce();

        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            $validation = ActiveForm::validate($model);
            if (empty($validation)) {
                $model->save(false);

                \Yii::$app->mailer->compose()
                    ->setFrom('info@moonlifter.ru')
                    ->setTo('max.p.burov@gmail.com')
                    ->setReplyTo($model->email)
                    ->setSubject('Запрос коммерческого предложения')
                    ->setTextBody('Запрос коммерческого предложения на адрес ' . $model->email)
                    ->send();

                return $this->asJson(['success' => true, 'message' => 'Спасибо! Мы отправим вам коммерческое предложение на E-mail.']);
            } else {
                return $this->asJson(['validation' => $validation]);
            }
        } else {
            throw new NotFoundHttpException();
        }
    }

    public function actionFormFeedback() {
        $model = new Feedback();

        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            $validation = ActiveForm::validate($model);
            if (empty($validation)) {
                $model->save(false);

                \Yii::$app->mailer->compose()
                    ->setFrom('noreply@' . $_SERVER['SERVER_NAME'])
                    ->setTo('nikita@site24.pro')
                    //->setReplyTo([$model->email => $model->name])
                    ->setSubject('Заказ звонка с сайта ' . $_SERVER['SERVER_NAME'])
                    ->setTextBody('Имя: ' . $model->name . "\nТелефон: " . $model->phone . "\n")
                    ->send();


                return $this->asJson(['success' => true, 'message' => 'Спасибо! Ваше сообщение отправлено. Мы свяжемся с вами.']);
            } else {
                return $this->asJson(['validation' => $validation]);
            }
        } else {
            throw new NotFoundHttpException();
        }
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = 'admin';

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $this->layout = 'admin';
        return $this->render('about');
    }
}
