<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $feedbackModel app\models\Feedback */
?>

<? $form = ActiveForm::begin([
    'id' => 'form-feedback',
    'action' => '/site/form-feedback',
    'method' => 'post',
    'enableClientValidation' => true,
    'enableAjaxValidation' => false,
    'enableClientScript' => true,
    'validateOnType' => true,
    'options' => [
        'class' => 'ajax'
    ]
]); ?>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="hh"><?=\app\widgets\ContentWidget::widget(['id' => 'contacts-form_1']);?></div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="form-row">
                <?=$form
                    ->field($feedbackModel, 'name')
                    ->textInput([
                        'class' => 'form-control',
                        'placeholder' => $feedbackModel->getAttributeLabel('name') . ($feedbackModel->isAttributeRequired('name') ? ' *' : '')
                    ])
                    ->label(false);
                ?>
            </div>
            <div class="form-row">
                <?=$form
                    ->field($feedbackModel, 'email')
                    ->textInput([
                        'class' => 'form-control',
                        'placeholder' => $feedbackModel->getAttributeLabel('email') . ($feedbackModel->isAttributeRequired('email') ? ' *' : '')
                    ])
                    ->label(false);
                ?>
            </div>
            <div class="form-row">
                <?=$form
                    ->field($feedbackModel, 'phone')
                    ->textInput([
                        'type' => 'tel',
                        'class' => 'form-control',
                        'placeholder' => $feedbackModel->getAttributeLabel('phone') . ($feedbackModel->isAttributeRequired('phone') ? ' *' : '')
                    ])
                    ->label(false);
                ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="form-row">
                <?=$form
                    ->field($feedbackModel, 'message')
                    ->textarea([
                        'class' => 'form-control',
                        'placeholder' => $feedbackModel->getAttributeLabel('message') . ($feedbackModel->isAttributeRequired('message') ? ' *' : '')
                    ])
                    ->label(false);
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-4">
            <?=Html::submitInput('Отправить'); ?>
        </div>
    </div>

<? ActiveForm::end(); ?>
