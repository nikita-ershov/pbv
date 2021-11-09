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

        <?=$form
            ->field($feedbackModel, 'name')
            ->textInput([
                'class' => 'form-control',
                'placeholder' => $feedbackModel->getAttributeLabel('name') . ($feedbackModel->isAttributeRequired('name') ? ' *' : '')
            ])
            ->label(false);
        ?>

        <?=$form
            ->field($feedbackModel, 'phone')
            ->textInput([
                'type' => 'tel',
                'class' => 'form-control',
                'placeholder' => $feedbackModel->getAttributeLabel('phone') . ($feedbackModel->isAttributeRequired('phone') ? ' *' : '')
            ])
            ->label(false);
        ?>


        <?=Html::submitInput('Узнать сейчас', ['class' => 'btn']); ?>


<? ActiveForm::end(); ?>
