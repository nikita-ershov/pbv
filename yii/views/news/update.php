<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = $title;
$this->params['breadcrumbs'][] = ['label' => $title, 'url' => ['index', 'id_category' => $id_category]];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ''];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="news-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'id_category' => $id_category
    ]) ?>

</div>
