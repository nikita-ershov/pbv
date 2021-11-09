<?php

/* @var $this \yii\web\View */
/* @var $content string */
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=$this->title?></title>

    <link rel="shortcut icon" href="/img/favicon.png" type="image/png">

    <?php $this->head(); ?>
</head>
<body>
<?php $this->beginBody() ?>

<?=$content;?>

<?=\app\widgets\AdminWidget::widget();?>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>