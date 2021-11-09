<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?= Html::errorSummary($model, ['encode' => false]) ?>
    <?=$form->field($model, 'id_category')->hiddenInput(['value' => $id_category])->label('');?>

    <?= $form->field($model, 'date')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'dd.MM.yyyy',
    ]) ?>

    <? /* if ($model->getThumbUploadUrl('image', 'news_thumb')) : ?>
        <div class="form-group">
            <?= Html::img($model->getThumbUploadUrl('image', 'news_thumb'), ['class' => 'img-thumbnail']) ?>
        </div>
    <? endif; */ ?>
    <? if ($model->getUploadUrl('image')) : ?>
        <?=Html::tag('div', Html::img($model->getUploadUrl('image'), ['width' => 100]), ['style' => 'padding: 5px; background: #888; text-align: center; max-width: 120px;']);?>
    <? endif; ?>

    <?= $form->field($model, 'image')->fileInput(['accept' => 'image/*']) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <? if (in_array($id_category, [5])) : ?>
        <?=$form->field($model, 'anons')->widget(\mihaildev\ckeditor\CKEditor::className(), [
            'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', [
                'height' => 150,
                'toolbarGroups' => [
                    ['name' => 'mode'],
                    ['name' => 'undo'],
                    ['name' => 'basicstyles', 'groups' => ['basicstyles', 'cleanup']],
                    ['name' => 'paragraph', 'groups' => ['templates', 'list', 'indent']],
                    ['name' => 'links', 'groups' => ['links', 'insert']],
                    ['name' => 'others','groups' => ['others', 'about']],
                ],
                'removeButtons' => 'About,Anchor,Subscript,Superscript,Flash,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe'
            ]),
        ]);?>
    <? endif; ?>

    <?=$form->field($model, 'content')->widget(\mihaildev\ckeditor\CKEditor::className(), [
        'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', [
            'height' => 300,
            'toolbarGroups' => [
                ['name' => 'mode'],
                ['name' => 'undo'],
                ['name' => 'basicstyles', 'groups' => ['basicstyles', 'cleanup']],
                ['name' => 'paragraph', 'groups' => ['templates', 'list', 'indent']],
                ['name' => 'links', 'groups' => ['links', 'insert']],
                ['name' => 'others','groups' => ['others', 'about']],
            ],
            'removeButtons' => 'About,Anchor,Subscript,Superscript,Flash,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe'
        ]),
    ]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
