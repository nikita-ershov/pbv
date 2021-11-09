<?php
use app\widgets\ContentWidget;
use yii\helpers\Html;


/* @var $this yii\web\View */

$this->title = 'Оборот';
?>
<?=$this->render('_header', ['class' => 'PAGE2']);?>

<div class="screen page4 d-flex align-items-center justify-content-center">
    <div class="wrapper">
        <div class="container-fluid">
            <? foreach (\app\models\News::find()->where(['id_category' => 4])->orderBy(['sortOrder' => SORT_ASC])->all() as $item) : ?>
                <div class="row page4-item wow fadeInUp">
                    <div class="col-12 col-md-6">
                        <div class="h"><?=$item->title?></div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="text">
                            <?=$item->content;?>
                        </div>
                    </div>
                </div>
            <? endforeach; ?>

            <div class="page4-arrow d-block d-md-none wow infinite slow slideInDown"><img src="/img/arrow-down.svg" /></div>
            <div class="btn-block wow fadeInDown">
                <a href="https://wa.me/89221045454" class="btn">Подключиться</a>
            </div>
        </div>
    </div>
</div>

<div class="page5">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="h wow fadeIn"><?=ContentWidget::widget(['id' => 'page5_h']);?></div>
                </div>
                <div class="col-12 col-md-6">
                    <? foreach (\app\models\News::find()->where(['id_category' => 3])->orderBy(['sortOrder' => SORT_ASC])->all() as $item) : ?>
                        <div class="page5-item wow fadeIn">
                            <? if ($item->getUploadUrl('image')) : ?>
                                <div class="image"><img class="wow infinite pulse slower" src="<?=$item->getUploadUrl('image');?>" /></div>
                            <? endif; ?>
                            <div class="h2"><?=$item->title;?></div>
                            <? if (!empty($item->content)) : ?>
                                <div class="text"><?=$item->content;?></div>
                            <? endif; ?>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
            <div class="page5-arrow d-block d-md-none wow infinite slow slideInDown"><img src="/img/arrow-down.svg" /></div>
            <div class="btn-block wow fadeInUp">
                <a href="https://wa.me/89221045454" class="btn">Подключиться</a>
            </div>
        </div>
    </div>
</div>

<div class="PAGE2 page2">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="page2-slider wow fadeInUp">
                <? foreach (\app\models\News::find()->where(['id_category' => 2])->orderBy(['sortOrder' => SORT_ASC])->all() as $k => $item) : ?>
                    <div class="page2-slider-item">
                        <? if ($item->getUploadUrl('image')) : ?>
                            <div class="image"><img class="wow infinite pulse slower" src="<?=$item->getUploadUrl('image');?>" /></div>
                        <? endif; ?>
                        <div class="text">
                            <? if ($k == 0) : ?>
                                <div class="h2"><?=$item->content;?></div>
                            <? else : ?>
                                <?=$item->content;?>
                            <? endif; ?>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>

            <div class="btn-block d-block d-md-none">
                <a href="https://wa.me/89221045454" class="btn">Подключиться</a>
            </div>
        </div>
    </div>
</div>

<?=$this->render('_footer', ['class' => 'PAGE2']);?>
