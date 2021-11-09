<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $feedbackModel app\models\Feedback */
?>

<? $form = ActiveForm::begin([
    /*'id' => 'form-feedback',*/
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
    <div class="form-group">
        <?=$form
            ->field($feedbackModel, 'name')
            ->textInput([
                'class' => 'form-control',
                'placeholder' => $feedbackModel->getAttributeLabel('name') . ($feedbackModel->isAttributeRequired('name') ? ' *' : '')
            ])
            ->label(false);
        ?>
    </div>
    <div class="form-group">
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
    <div class="form-group">
        <?=Html::submitInput('Отправить', ['class' => 'btn']); ?>
    </div>

<? ActiveForm::end(); ?>
