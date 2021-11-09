<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Files */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="files-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <? if (!empty($model->getUploadUrl('file'))) : ?>
        <div class="form-group">
            <?=Html::a('<span class="glyphicon glyphicon-download"></span> ' . $model->file, $model->getUploadUrl('file'));?>
            <small>(<?=$model->getFileSize();?>)</small>

        </div>
    <? endif; ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'description')->textarea(['rows' => 5]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
