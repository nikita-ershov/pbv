<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\Content */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

if (Yii::$app->session->getFlash('content-edit-success')) {
    $this->registerJs('window.parent.$.fancybox.close(); window.parent.location.reload();');
}
?>

<? $form = ActiveForm::begin([
    'id' => 'form-content-edit',
    'action' => ['admin/content-edit', 'id' => $model->id],
    'method' => 'post',
    'enableClientValidation' => false,
    'enableAjaxValidation' => false,
    'enableClientScript' => false,
    'options' => [
    ]
]); ?>
    <? if ($model->htmlEditor) : ?>
    <?
    $options['height'] = 100;

    $options['toolbarGroups'] = [
        ['name' => 'undo'],
        ['name' => 'basicstyles', 'groups' => ['basicstyles', 'cleanup']],
        ['name' => 'colors'],
        ['name' => 'links', 'groups' => ['links', 'insert']],
        ['name' => 'others','groups' => ['others', 'about']],
    ];
    $options['removeButtons'] = 'Subscript,Superscript,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe';
    $options['removePlugins'] = 'elementspath';
    $options['resize_enabled'] = false;
    ?>
        <?=$form->field($model, 'content')->widget(\mihaildev\ckeditor\CKEditor::className(), [
            'editorOptions' => \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder', [
                'height' => 200,
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
        ])->label(false);?>
    <? else :?>
        <?=$form->field($model, 'content')->textarea(['rows' => 7])->label(false);?>
    <? endif; ?>

    <div class="form-group text-right">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

<? ActiveForm::end(); ?>