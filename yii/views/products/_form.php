<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */

$this->registerCssFile("@web/js/jexcel/dist/css/jquery.jexcel.css", ['depends' => 'app\assets\AdminAsset']);
$this->registerCssFile("@web/js/jexcel/dist/css/jquery.jdropdown.css", ['depends' => 'app\assets\AdminAsset']);

$this->registerJsFile('@web/js/jexcel/dist/js/jquery.jexcel.js', ['depends' => 'app\assets\AdminAsset']);
$this->registerJsFile('@web/js/jexcel/dist/js/jquery.jdropdown.js', ['depends' => 'app\assets\AdminAsset']);

$this->registerJs(<<<END
let
    eField = $('#products-content'),
    eData = eField.val() != '' ? eField.val() : false,
    eTable = $('<div id="eTable_' + eField.data('id') + '" />');

    eField.hide();
    eField.after($('<div />').append(eTable));

    let params = {
        data: eData,
        minDimensions: [2, 5],
        colWidths: [ 400, 80 ],
        colHeaders: ['Название', 'Значение' ],
        allowInsertColumn: false,
        columnSorting: true,
        columns: [
            { type: 'text', wordWrap: true, textAlign: 'left' },
            { type:'text' },
        ],
        onchange: function (obj, cel, val) {
            let data = obj.jexcel('getData');
            eField.val(JSON.stringify(data));
        },
    };

    eTable.jexcel(params);
END
, $this::POS_READY);
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= Html::errorSummary($model, ['encode' => false]) ?>
    <?=$form->field($model, 'id_category')->hiddenInput(['value' => $id_category])->label('');?>

    <? /* if ($model->getThumbUploadUrl('image', 'news_thumb')) : ?>
        <div class="form-group">
            <?= Html::img($model->getThumbUploadUrl('image', 'news_thumb'), ['class' => 'img-thumbnail']) ?>
        </div>
    <? endif; */ ?>
    <? if ($model->getUploadUrl('image1')) : ?>
        <?=Html::tag('div', Html::img($model->getUploadUrl('image1'), ['width' => 100]), ['style' => 'padding: 5px; background: #888; text-align: center; max-width: 120px;']);?>
    <? endif; ?>
    <?= $form->field($model, 'image1')->fileInput(['accept' => 'image/*']) ?>


    <? if ($model->getUploadUrl('image2')) : ?>
        <?=Html::tag('div', Html::img($model->getUploadUrl('image2'), ['width' => 100]), ['style' => 'padding: 5px; background: #888; text-align: center; max-width: 120px;']);?>
    <? endif; ?>
    <?= $form->field($model, 'image2')->fileInput(['accept' => 'image/*']) ?>


    <? if ($model->getUploadUrl('image3')) : ?>
        <?=Html::tag('div', Html::img($model->getUploadUrl('image3'), ['width' => 100]), ['style' => 'padding: 5px; background: #888; text-align: center; max-width: 120px;']);?>
    <? endif; ?>
    <?= $form->field($model, 'image3')->fileInput(['accept' => 'image/*']) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price2')->textInput(); ?>

    <?= $form->field($model, 'price3')->textInput(); ?>

    <?= $form->field($model, 'content')->textarea(); ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
