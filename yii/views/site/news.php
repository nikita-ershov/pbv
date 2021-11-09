<?php

/* @var $this yii\web\View */
/* @var $model \app\models\News */

use yii\helpers\Html;
?>
<div style="max-width: 800px; max-height: 70%; overflow: auto;">
    <p><?=date('d.m.Y', $model->date);?></p>
    <? if ($model->getThumbUploadUrl('image', 'news_thumb')) : ?>
        <p><?= Html::img($model->getThumbUploadUrl('image', 'news_thumb')) ?></p>
    <? endif; ?>
    <h2><?=$model->title?></h2>
    <?=$model->content;?>
</div>
