<?php

namespace app\controllers;

use app\models\Files;
use himiklab\sortablegrid\SortableGridAction;
use Yii;
use app\models\News;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
{
    public $layout = 'admin';

    public $categories = [
        5 => 'Новости',
        6 => 'Преимущества',
    ];

    public function actions()
    {
        return [
            'sort' => [
                'class' => SortableGridAction::className(),
                'modelName' => News::className(),
            ],
        ];
    }

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
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex($id_category)
    {
        $dataProvider = new ActiveDataProvider([
            'query' => News::find()->where(['id_category' => $id_category]),
            'sort'=> ['defaultOrder' => ($id_category == 5 ? ['date' => SORT_DESC] : ['sortOrder' => SORT_ASC])],
            'pagination' => [
                'pageSize' => 200,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'id_category' => $id_category,
            'title' => $this->categories[$id_category]
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id, $id_category)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
            'title' => $this->categories[$id_category]
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id_category)
    {
        $model = new News();
        $model->date = time();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id_category' => $id_category]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'id_category' => $id_category,
                'title' => $this->categories[$id_category]
            ]);
        }
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id, $id_category)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id_category' => $id_category]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'id_category' => $id_category,
                'title' => $this->categories[$id_category]
            ]);
        }
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id, $id_category)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index', 'id_category' => $id_category]);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
