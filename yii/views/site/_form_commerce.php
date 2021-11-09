<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<? $form = ActiveForm::begin([
    'id' => 'form-commerce',
    'action' => '/site/form-commerce',
    'method' => 'post',
    'enableClientValidation' => true,
    'enableAjaxValidation' => false,
    'enableClientScript' => true,
    'validateOnType' => true,
    'options' => [
        'class' => 'ajax'
    ]
]); ?>
    <div class="subscribe__col">
        <?=$form->field($commerceModel, 'check')->checkbox(['label' => null, 'id' => 'subscribe_check']);?>
    </div>
    <div class="subscribe__col">
        <label for="subscribe_check">
            <?=\app\widgets\ContentWidget::widget(['id' => 'subscribe_1']);?>
        </label>
    </div>
    <div class="visible-md visible-sm"></div>
    <div class="subscribe__col">
        <?=$form->field($commerceModel, 'email')->textInput(['class' => 'form-control'])->label(null, ['class' => 'small'])?>
    </div>
    <div class="subscribe__col">
        <?=Html::submitInput('Отправить'); ?>
    </div>

<? ActiveForm::end(); ?>
