<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $title;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create', 'id_category' => $id_category], ['class' => 'btn btn-success']) ?>
    </p>
    <?= \himiklab\sortablegrid\SortableGridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'date:date',
            [
                'attribute' => 'image',
                'format' => 'html',
                'options' => ['style' => 'width: 60px;'],
                'value' => function($data) {
                    return Html::tag('div', Html::img($data->getUploadUrl('image'), ['width' => 40]), ['style' => 'padding: 5px; background: #888; text-align: center; max-width: 60px;']);
                    //return ''; /*$data->getThumbUploadUrl('image', 'news_thumb');*/
                }
            ],
            'title',
            'created_at:date',
            'updated_at:date',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url . '&id_category=' . $_GET['id_category'], [
                            'title' => Yii::t('app', 'lead-update'),
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url . '&id_category=' . $_GET['id_category'], [
                            'title' => Yii::t('app', 'lead-delete'),
                            'data-pjax' => 0,
                            'data-confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                            'data-method' => 'post'
                        ]);
                    }

                ],
            ],
        ],
    ]); ?>
</div>
